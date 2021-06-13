<?php
namespace Mic2100\Benchmark\Commands;

use Mic2100\Benchmark\Benchmarker;
use Mic2100\Benchmark\Tests\TestInterface;
use Mic2100\Benchmark\Tests\TestReport;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class TestsRunCommand extends Command
{
    protected static $defaultName = 'tests:run';

    /**
     * @var array
     */
    private array $tests;

    /**
     * @param TestInterface $test
     * @return TestsRunCommand
     */
    public function addTest(TestInterface $test): self
    {
        $this->tests[$test::GROUP_NAME][] = $test;

        return $this;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $groupHeaders = [
            'Group Name',
            'Tests',
        ];
        $groupRows = [];
        foreach ($this->tests as $groupName => $groupTests) {
            $groupRows[] = [
                $groupName,
                count($groupTests),
            ];
        }
        $table = new Table($output);
        $table->setHeaders($groupHeaders);
        $table->setRows($groupRows);
        $table->render();

        $question = new Question(
            'Please provide a comma separated list of the groups you want to run' . PHP_EOL
        );

        $answer = $this->getHelper('question')->ask($input, $output, $question);
        if (!$answer) {
            $output->writeln('<error>No group names were selected</error>');

            return Command::FAILURE;
        }
        $groupNames = explode(',', $answer);

        foreach ($this->tests as $groupName => $groupTests) {
            if (!in_array($groupName, $groupNames)) {
                continue;
            }
            $benchmark = new Benchmarker;
            $report = new TestReport($groupName);
            $outputSection = $output->section();
            $outputSection->writeln(sprintf('<info>Processing Group %s</info>', $groupName));

            foreach ($groupTests as $test) {
                $benchmark->add($test);
            }

            $benchmark->execute();
            $outputSection->clear();
            foreach ($benchmark->report() as $benchmarkOutput) {
                $report->addTestReport(...$benchmarkOutput);
            }

            $table = new Table($output);
            $table->setHeaders($report->getHeaders());
            $table->setRows($report->getBody());
            $table->render();
        }

        return Command::SUCCESS;
    }
}

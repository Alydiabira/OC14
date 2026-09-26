<?php

namespace Vich\UploaderBundle\Command;

<<<<<<< HEAD
=======
use Symfony\Component\Console\Attribute\AsCommand;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Vich\UploaderBundle\Metadata\MetadataReader;

<<<<<<< HEAD
=======
#[AsCommand(name: 'vich:mapping:list-classes', description: 'Searches for uploadable classes.')]
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class MappingListClassesCommand extends Command
{
    public function __construct(private readonly MetadataReader $metadataReader)
    {
        parent::__construct();
    }

<<<<<<< HEAD
    public static function getDefaultName(): string
    {
        return 'vich:mapping:list-classes';
    }

    protected function configure(): void
    {
        $this
            ->setName('vich:mapping:list-classes')
            ->setDescription('Searches for uploadable classes.')
        ;
    }

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Looking for uploadable classes.');

        $uploadableClasses = $this->metadataReader->getUploadableClasses();

        foreach ($uploadableClasses as $class) {
            $output->writeln(\sprintf('Found <comment>%s</comment>', $class));
        }

        $output->writeln(\sprintf('Found <comment>%d</comment> classes.', \count((array) $uploadableClasses)));

        return self::SUCCESS;
    }
}

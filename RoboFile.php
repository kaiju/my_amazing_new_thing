<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    // define public methods as commands
    public function build()
    {
        $this->say("Build :)");

        $collection = $this->collectionBuilder();

        $temp_dir = $collection->tmpDir();

        $collection
            ->taskPHPUnit()
            ->taskRsync()
                ->fromPath([
                    __DIR__ . '/app'
                    ])
                ->toPath($temp_dir)
                ->recursive()
            ->taskFilesystemStack()
                ->mkdir(__DIR__ . '/build')
            ->taskPack(__DIR__ . '/build/package.tar.gz')
                ->addDir('my_thing', $temp_dir);

        return $collection->run();
    }

}

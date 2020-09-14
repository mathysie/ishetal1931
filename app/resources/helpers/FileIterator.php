<?php

declare(strict_types=1);

namespace lucifer;

class FileIterator extends \FilterIterator
{
    public function __construct(string $path)
    {
        parent::__construct(new \FilesystemIterator(
            $path,
            \FilesystemIterator::KEY_AS_FILENAME | \FilesystemIterator::SKIP_DOTS
        ));
    }

    public function accept()
    {
        return '.' != parent::current()->getFilename()[0];
    }

    public function seek(int $location)
    {
        $this->rewind();
        for ($i = 0; $i < $location; ++$i) {
            $this->next();
        }
    }
}

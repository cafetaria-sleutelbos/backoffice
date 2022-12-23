<?php

namespace App\AI\Adjusted;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class AdjustedService
{
    static function run()
    {
        $process = new Process(['python', app_path(). "/AI/Adjusted".'/CheckAdjustedReceipt.py']);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $data = $process->getOutput();

        dd($data);
    }
}

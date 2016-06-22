<?php

return [
    'server'           => "127.0.0.1:4444",
    'downloadFunction' => function ($link, $file)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_REFERER, $link);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $content = curl_exec($curl);
        curl_close($curl);
        
        file_put_contents($file, $content, LOCK_EX);
    },
    'commandExecutor'  => function ($commands)
    {
        $comandsCount = count($commands);
        
        for ($i = 0; $i < $comandsCount; $i++)
        {
            if ($i == 0)
            {
                echo "\n\n";
            }
            if (!empty($commands[$i]['description']))
            {
                echo $commands[$i]['description'] . "\n\n";
            }
            
            if (!empty($commands[$i]['command']))
            {
                echo passthru($commands[$i]['command']) . "\n\n";
            }
            
            if (!empty($commands[$i]['callback']))
            {
                call_user_func(($commands[$i]['callback']));
            }
            if ($i == $comandsCount - 1)
            {
                echo "\n\n";
            }
        }
    },
    'removeFunction'   => function ($path)
    {
        if (file_exists($path))
        {
            if (is_file($path))
            {
                @unlink($path);
            }
            else
            {

                $iterator = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS);
                $files = new RecursiveIteratorIterator(
                    $iterator, RecursiveIteratorIterator::CHILD_FIRST
                );
                foreach ($files as $file)
                {
                    if ($file->isDir())
                    {
                        @rmdir($file->getRealPath());
                    }
                    else
                    {
                        @unlink($file->getRealPath());
                    }
                }
                @rmdir($path);
            }
        }
    },
];
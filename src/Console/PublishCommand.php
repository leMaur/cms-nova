<?php

declare(strict_types=1);

namespace Lemaur\CmsNova\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class PublishCommand extends Command
{
    protected $signature = 'cms-nova:install
                            {--F|force}';

    protected $description = '';

    public function handle(Filesystem $filesystem): int
    {
        $this->copyFiles($filesystem, [
            __DIR__.'/../Console/stubs/Models/Tag.php.stub' => app_path('Models/Tag.php'),
            __DIR__.'/../Console/stubs/Models/Page.php.stub' => app_path('Models/Page.php'),
            __DIR__.'/../Console/stubs/Models/SocialNavigation.php.stub' => app_path('Models/SocialNavigation.php'),
            __DIR__.'/../Console/stubs/Models/PrimaryNavigation.php.stub' => app_path('Models/PrimaryNavigation.php'),
            __DIR__.'/../Console/stubs/Models/SecondaryNavigation.php.stub' => app_path('Models/SecondaryNavigation.php'),

            __DIR__.'/../Console/stubs/Nova/Tag.php.stub' => app_path('Nova/Tag.php'),
            __DIR__.'/../Console/stubs/Nova/Page.php.stub' => app_path('Nova/Page.php'),
            __DIR__.'/../Console/stubs/Nova/SocialNavigation.php.stub' => app_path('Nova/SocialNavigation.php'),
            __DIR__.'/../Console/stubs/Nova/PrimaryNavigation.php.stub' => app_path('Nova/PrimaryNavigation.php'),
            __DIR__.'/../Console/stubs/Nova/SecondaryNavigation.php.stub' => app_path('Nova/SecondaryNavigation.php'),

            __DIR__.'/../Console/stubs/Nova/Concerns/MetaFields.php.stub' => app_path('Nova/Concerns/MetaFields.php'),
            __DIR__.'/../Console/stubs/Nova/Concerns/SlugForIndex.php.stub' => app_path('Nova/Concerns/SlugForIndex.php'),
            __DIR__.'/../Console/stubs/Nova/Concerns/StatusForIndex.php.stub' => app_path('Nova/Concerns/StatusForIndex.php'),
            __DIR__.'/../Console/stubs/Nova/Concerns/DateTimeForIndex.php.stub' => app_path('Nova/Concerns/DateTimeForIndex.php'),
        ]);

        // Install Nova
        $this->call('nova:install', ['--quiet']);

        // Migrate DB
        $this->call('migrate', ['--quiet']);

        return 0;
    }

    private function copyFiles(Filesystem $filesystem, array $files): void
    {
        collect($files)->each(function ($published, $original) use ($filesystem) {
            if (! $this->option('force') && $filesystem->exists($published)) {
                $this->error("The file [$published] already exists.");
            }

            $path = Str::beforeLast($published, '/');
            $filesystem->ensureDirectoryExists($path);
            $filesystem->copy($original, $published);
        });

        $this->info("Successfully published all files!");
    }
}

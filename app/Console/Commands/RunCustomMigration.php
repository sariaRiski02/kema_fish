<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RunCustomMigration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migrations in a custom order';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $migrations = [
            '0001_01_01_000000_create_users_table.php',
            '0001_01_01_000001_create_cache_table.php',
            '2024_08_09_134010_create_admins_table.php',
            '2024_08_06_002430_addresses.php',
            '2024_08_06_004213_contacts.php',
            '2024_08_06_004603_categories.php',
            '2024_08_06_005108_products.php',
            '2024_08_06_005925_carts.php',
            '2024_08_06_010610_transactions.php'
        ];

        foreach ($migrations as $migrate) {
            // Perhatikan perubahan pada folder 'migrations'
            $path = database_path("migrations/{$migrate}");


            Artisan::call('migrate:rollback');
            Artisan::call('migrate', ['--path' => $path]);
            $this->info("Migrated: $migrate");
        }

        $this->info('Custom migrations completed successfully');
    }
}

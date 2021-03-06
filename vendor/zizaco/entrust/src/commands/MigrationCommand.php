<?php namespace Zizaco\Entrust;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class MigrationCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'entrust:migration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a migration following the Entrust especifications.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->laravel->view->addNamespace('entrust',substr(__DIR__,0,-8).'views');

        $roles_table = lcfirst($this->option('table'));

        $this->line('');
        $this->info( "Tables: $roles_table, user_roles, permissions, permission_role" );
        $message = "A migration that creates '$roles_table', 'user_roles', 'permissions', 'permission_role'".
        " tables will be created in app/database/migrations directory";

        $this->comment( $message );
        $this->line('');

        if ( $this->confirm("Proceed with the migration creation? [Yes|no]") ) {

            $this->line('');

            $this->info( "Creating migration..." );
            if ( $this->createMigration( $roles_table ) ) {

                $this->info( "Migration successfully created!" );
            } else {
                $this->error(
                    "Coudn't create migration.\n Check the write permissions".
                    " within the app/database/migrations directory."
                );
            }

            $this->line('');

        }
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
            array('table', null, InputOption::VALUE_OPTIONAL, 'Roles table.', 'roles'),
        );
    }

    /**
     * Create the migration.
     *
     * @param string $name
     *
     * @return bool
     */
    protected function createMigration($roles_table = 'roles')
    {
        $migration_file = $this->laravel->path."/database/migrations/".date('Y_m_d_His')."_entrust_setup_tables.php";
        $output = $this->laravel->view->make('entrust::generators.migration')->with('table', $roles_table)->render();

        if (!file_exists($migration_file) && $fs = fopen($migration_file, 'x')) {
            fwrite($fs, $output);
            fclose($fs);
            return true;
        }

        return false;
    }
}

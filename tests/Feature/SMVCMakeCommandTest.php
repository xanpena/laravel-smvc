<?php

namespace Xanpena\SMVC\Tests\Feature;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase;

final class SMVCMakeCommandTest extends TestCase {
    
    /** @test */
    public function test_it_creates_a_new_crud_schema_class() {
        // destination path of the Foo class
        $smvcClass = app_path('Src/Schemas/CRUD/DummySchema.php');

        // make sure we're starting from a clean state
        if (File::exists($smvcClass)) {
            unlink($smvcClass);
        }

        $this->assertFalse(File::exists($smvcClass));

        // Run the make command
        Artisan::call('make:smvc DummySchema --crud');

        // Assert a new file is created
        $this->assertTrue(File::exists($smvcClass));

        // Assert the file contains the right contents
        $expectedContents = <<<CLASS
<?php

namespace App\Foo;

use JohnDoe\BlogPackage\Foo;

class DummySchema implements Foo
{
    public function myFoo()
    {
        // foo
    }
}
CLASS;

        $this->assertEquals($expectedContents, file_get_contents($smvcClass));
    }
}
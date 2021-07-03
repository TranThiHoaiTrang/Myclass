<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Foostart\Category\Helpers\FoostartMigration;

class CreateMyclassTable extends FoostartMigration
{
    public function __construct() {
        $this->table = 'Myclass';
        $this->prefix_column = 'Myclass_';
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists($this->table);
        Schema::create($this->table, function (Blueprint $table) {
            
            $table->increments($this->prefix_column . 'id')->comment('Primary key');
            
            // Relation
            $table->integer('category_id')->nullable()->comment('Category ID');
            $table->integer('slideshow_id')->nullable()->comment('Slideshow ID');
            
            // Other attributes
            $table->string($this->prefix_column . 'name', 255)->comment('class name');
            $table->integer($this->prefix_column . 'order')->nullable()->comment('Order in list of categories');
            $table->string($this->prefix_column . 'slug', 1000)->comment('Slug in URL');
            $table->string($this->prefix_column . 'overview', 1000)->comment('class overview');            
            $table->text($this->prefix_column . 'description')->comment('class description');
            $table->string($this->prefix_column . 'image', 255)->nullable()->comment('Image path');
            $table->string($this->prefix_column . 'files', 1000)->nullable()->comment('The list of attachment filenames');
            $table->text($this->prefix_column . 'cache_comments')->nullable()->comment('Comments of class');
            $table->string($this->prefix_column . 'cache_other_classes', 1000)->nullable()->comment('The class id of related classes ');
            $table->integer($this->prefix_column . 'cache_time')->nullable()->comment('Order in list of categories');
            
            //Set common columns
            $this->setCommonColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}

   <?php
   use Illuminate\Database\Migrations\Migration;
   use Illuminate\Database\Schema\Blueprint;
   use Illuminate\Support\Facades\Schema;

   return new class extends Migration
   {
   /**
    * Run the migrations.
    * @return void
    */
   public function up()
   {
   Schema::create('kereta', function (Blueprint $table) {
      $table->increments('id_kereta');
      $table->integer('total_kursi');
      $table->string('nama_kereta');
      $table->string('jenis_kereta');
   });
   }
   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
   Schema::dropIfExists('kereta');
   }
   };

<?php

use App\Models\Track;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('catagorys', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Track::class);
            $table->date('Todays_date');
            $table->json('catagory_type');
            $table->float('expense_value');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

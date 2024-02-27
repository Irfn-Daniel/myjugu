<?php

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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('trans'); // Assuming 'trans' is a unique identifier
            $table->string('name');
            $table->string('nid_number')->unique(); // Assuming 'nid_number' is unique
            $table->string('id_photo')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile_number')->unique();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('religion');
            $table->date('date_of_birth')->nullable();
            $table->unsignedTinyInteger('age')->nullable();
            $table->date('date_of_death')->nullable();
            $table->string('education')->nullable();
            $table->string('job_title')->nullable();
            $table->string('employer')->nullable();
            $table->string('postal_address');
            $table->string('residential_address');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('llg_id'); 
            $table->unsignedBigInteger('ward_id');
            $table->unsignedBigInteger('village_id');
            $table->unsignedBigInteger('clan_id'); 
            $table->unsignedBigInteger('subclan_id'); 
            $table->unsignedBigInteger('sub_subclan_id'); 
            $table->string('bank_name')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('relationship')->nullable();
            $table->timestamps();

            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('llg_id')->references('id')->on('llgs')->onDelete('cascade'); // Set llg_id to null on delete
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade');
            $table->foreign('village_id')->references('id')->on('villages')->onDelete('cascade');
            $table->foreign('clan_id')->references('id')->on('clans')->onDelete('cascade'); // Set clan_id to null on delete
            $table->foreign('subclan_id')->references('id')->on('subclans')->onDelete('cascade'); // Set subclan_id to null on delete
            $table->foreign('sub_subclan_id')->references('id')->on('sub_subclans')->onDelete('cascade'); // Set sub_subclan_id to null on delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

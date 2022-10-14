<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_data', function (Blueprint $table) {
            $table->id();
            $table->string("member_id")->nullable();
            $table->string("name");
            $table->string("father_name");
            $table->string("mother_name");
            $table->string("spouse_name")->nullable();
            $table->string("mobile_number");
            $table->string("whatsapp_number");
            $table->string("email");
            $table->string("bob");
            $table->string("anniversary_date")->nullable();
            $table->string("nid")->nullable();
            $table->string("address");
            $table->string("present_address")->nullable();
            $table->string("permanent_address")->nullable();
            $table->string("tshirt_size")->nullable();
            $table->string("favorite_sports")->nullable();
            $table->string("membership")->nullable();
            $table->string("profession")->nullable();
            $table->string("designation")->nullable();
            $table->string("organization")->nullable();
            $table->string("image1")->nullable();
            $table->string("image2")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_data');
    }
}

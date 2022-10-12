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
            $table->string("member_id");
            $table->string("name");
            $table->string("father_name");
            $table->string("mother_name");
            $table->string("spouse_name");
            $table->string("mobile_number");
            $table->string("whatsapp_number");
            $table->string("email");
            $table->string("bob");
            $table->string("anniversary_date");
            $table->string("nid");
            $table->string("address");
            $table->string("present_address");
            $table->string("permanent_address");
            $table->string("tshirt_size");
            $table->string("favourite_sports");
            $table->string("membership");
            $table->string("profession");
            $table->string("designation");
            $table->string("organization");
            $table->string("image1");
            $table->string("image2");
            $table->timestamps();
            // $table->timestamps();
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

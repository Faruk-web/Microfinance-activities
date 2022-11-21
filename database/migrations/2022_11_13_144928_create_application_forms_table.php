<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->string('centerName');
            $table->string('subcenterName');
            $table->string('district')->nullable();
            $table->string('upazila')->nullable();
            $table->string('union')->nullable();
            $table->string('villageArea')->nullable();
            $table->string('applicationyear')->nullable();
            $table->string('session')->nullable();
            $table->string('english_name')->nullable();
            $table->string('name_bn')->nullable();
            $table->string('nid')->nullable();
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('applicant_number')->nullable();
            $table->string('status')->nullable();
            $table->string('status_st')->nullable();
            
            $table->string('religion')->nullable();
            $table->string('education_qualification')->nullable();
            $table->string('mobile')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('guardianmobile')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('occupation')->nullable();
            $table->string('amount')->nullable();
            $table->string('costamount')->nullable();
            $table->string('sector')->nullable();
            $table->string('amount_cost')->nullable();
            $table->string('photo')->nullable();
            $table->string('signature')->nullable();
            $table->string('confirm')->nullable();
            $table->string('email')->unique();
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
        Schema::dropIfExists('application_forms');
    }
}

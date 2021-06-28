<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShadowrunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shadowruns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            // Single line text fields
            $fields_string = [
                'name',
                'notes',
                'primary_alias',
                'metatype',
                'ethnicity',
                'age',
                'sex',
                'height',
                'weight',
                'street_cred',
                'notoriety',
                'public_awareness',
                'karma',
                'total_karma',
                'misc',
                'primary_armor',
                'primary_ranged_weapon',
                'primary_melee_weapon',
                'primary_lifestyle',
                'nuyen',
                'licenses',
                'cyberdeck_model',
                'vehicle',
            ];
            foreach($fields_string as $name)
            {
                $table->string($name)->nullable();
            }

            // Multi-line text fields (65,535 chars should be enough)
            $fields_text = [
                'fake_ids_related_lifestyles_funds_licenses',
                'cyberdeck_programs',
                'vehicle_notes',
            ];
            foreach($fields_text as $name)
            {
                $table->text($name)->nullable();
            }

            // Strict number fields (signed tiny integer = -128 to 127)
            $fields_integer = [
                'body',
                'agility',
                'reaction',
                'strength',
                'willpower',
                'logic',
                'intuition',
                'charisma',
                'edge',
                'edge_points',
                'essence',
                'magic_resonance',
                'initiative',
                'matrix_initiative',
                'astral_initiative',
                'composure',
                'judge_intentions',
                'memory',
                'lift_carry',
                'movement',
                'physical_limit',
                'mental_limit',
                'social_limit',
                'primary_armor_rating',
                'primary_ranged_weapon_damage',
                'primary_ranged_weapon_acc',
                'primary_ranged_weapon_ap',
                'primary_ranged_weapon_mode',
                'primary_ranged_weapon_rc',
                'primary_ranged_weapon_ammo',
                'primary_melee_weapon_reach',
                'primary_melee_weapon_dam',
                'primary_melee_weapon_acc',
                'primary_melee_weapon_ap',
                'physical_damage_track',
                'stun_damage_track',
                'matrix_condition_monitor',
                'overflow',
                'cyberdeck_attack',
                'cyberdeck_sleaze',
                'cyberdeck_device_rating',
                'cyberdeck_data_processing',
                'cyberdeck_firewall',
                'vehicle_handling',
                'vehicle_acceleration',
                'vehicle_speed',
                'vehicle_pilot',
                'vehicle_body',
                'vehicle_armor',
                'vehicle_sensor',
            ];
            foreach($fields_integer as $name)
            {
                $table->tinyInteger($name)->nullable()->default(0);
            }

            // Array fields
            $fields_json = [
                'skills',
                'qualities',
                'contacts',
                'ranged_weapons',
                'melee_weapons',
                'armor',
                'augmentations',
                'spells_preparations_rituals_complex_forms',
                'gear',
                'adept_powers_or_other_abilities',
            ];
            foreach($fields_json as $name)
            {
                $table->json($name)->nullable()->default('[]');
            }

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shadowruns');
    }
}

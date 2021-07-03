<div class="group--damage-track">
    <x-shadowrun.field
        mt="2" name="physical_damage" :calculated="true"
        label="Physical Damage Taken"
    />

    <x-shadowrun.field
        mt="2" name="stun_damage" :calculated="true" label="Stun Damage Taken"
    />

    <x-shadowrun.field
        mt="2" name="wound_modifier" :calculated="true" :disabled="true"
        label="Wound Modifier"
    />

    <x-shadowrun.field
        mt="2" name="overflow_damage" :calculated="true" :disabled="true"
        label="Overflow Damage"
    />
</div>

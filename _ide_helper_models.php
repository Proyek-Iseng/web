<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $name
 * @property string $slug
 * @property string $phone
 * @property string $address
 * @property int $avaible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Timetable> $timetables
 * @property-read int|null $timetables_count
 * @method static \Database\Factories\DoctorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereAvaible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Doctor extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $name
 * @property string $slug
 * @property string $gender
 * @property string $nik
 * @property string $birth_place
 * @property string $birth_date
 * @property string $religion
 * @property string $address
 * @property string $phone
 * @property string $marital_status
 * @property string $education
 * @property string $job
 * @property string $citizen
 * @property string|null $medical_record
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Registration> $registrations
 * @property-read int|null $registrations_count
 * @method static \Database\Factories\PatientFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Patient findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereBirthPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCitizen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEducation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereMaritalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereMedicalRecord($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereReligion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Patient extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property int $registration_number
 * @property string $registration_date
 * @property int $status
 * @property string $responsible_name
 * @property string $responsible_phone
 * @property string $patient_id
 * @property string $timetable_id
 * @property string|null $confirmed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Patient $patient
 * @property-read \App\Models\Timetable $timetable
 * @method static \Database\Factories\RegistrationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Registration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Registration newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Registration query()
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereRegistrationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereRegistrationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereResponsibleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereResponsiblePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereTimetableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereUpdatedAt($value)
 */
	class Registration extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $polyclinic
 * @property string $day
 * @property string $start
 * @property string $end
 * @property string|null $doctor_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Doctor|null $doctor
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Registration> $registrations
 * @property-read int|null $registrations_count
 * @method static \Database\Factories\TimetableFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable wherePolyclinic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereUpdatedAt($value)
 */
	class Timetable extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}


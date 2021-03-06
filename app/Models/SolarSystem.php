<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'mapSolarSystems';

	/**
	 * The primary key used by the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'solarSystemID';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function reports()
	{
		return $this->belongsToMany('App\Models\Report', 'report_systems', 'solarSystemID', 'reportID');
	}

	public function region()
	{
		return $this->belongsTo('App\Models\Region', 'regionID', 'regionID');
	}
}

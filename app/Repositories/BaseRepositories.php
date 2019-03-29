<?php

namespace App\Repositories;

trait BaseRepository
{
	/**
	 * Get number of the records
	 *
	 * @param  int $number
	 * @param  string $sort
	 * @param  string $sortColumn
	 * @return Paginate
	 */
	public function page($number = 10, $sort = 'desc', $sortColumn = 'created_at')
	{
		return $this->model->orderBy($sortColumn, $sort)->paginate($number);
	}
}

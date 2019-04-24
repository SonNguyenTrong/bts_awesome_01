<?php
namespace App\Repositories\Day;

use App\Models\Day;
use Illuminate\Http\Request;
use App\Repositories\BaseRepository;
use Illuminate\Database\DatabaseManager;
use App\Repositories\Day\DayRepositoryInterface;

/**
 * Class BaseRepository
 *
 * @package Framgia\Gmt\Repositories
 */
class DayRepository extends BaseRepository implements DayRepositoryInterface
{
    private $imageRepository;

    /**
     * @var Day
     */
    protected $model;
    
    /**
     * @var DatabaseManager
     */
    private $db;
    
    /**
     * DayRepository constructor.
     *
     * @param Day $model
     * @param DatabaseManager $db
     */
    public function __construct(Day $model, DatabaseManager $db)
    {
        parent::__construct($model);
        $this->db = $db;
    }

    public function deleteCascadeById(int $id)
    {
        $day = $this->model->where('id', $id)->get();
        $day->services()->delete();
        $day->images()->delete();
        return $day->delete();
    }
}

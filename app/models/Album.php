<?php


class Album extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var integer
     */
    public $artist_id;
     
    /**
     *
     * @var string
     */
    public $name;
     
    /**
     *
     * @var integer
     */
    public $label_id;
     
    /**
     *
     * @var string
     */
    public $description;
     
    /**
     *
     * @var string
     */
    public $year;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id', 
            'artist_id' => 'artist_id', 
            'name' => 'name', 
            'label_id' => 'label_id', 
            'description' => 'description', 
            'year' => 'year'
        );
    }

}

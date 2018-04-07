<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Mockery\Exception;

class Activitie extends Model
{

    protected $fillable = ['titulo','descricao','inicio','fim','info','curso_id'];
    public function add()
    {
        try {
            $this->inicio = date("Y-m-d h:i", strtotime($this->data));
            $this->fim = date("Y-m-d h:i", strtotime($this->data));
            $this->save();
        } catch (QueryException $ex) {
            return $ex->errorInfo;
        } catch (Exception $ex) {
            return $ex;
        }
        return $this;
    }

    public function get($id)
    {
        $data = self::find($id);
        if ($data instanceof Activitie) {
            return $data;
        }
        return false;
    }

    public function getAll()
    {
        $data = self::all();
        if ($data) {
            return $data;
        }
        return false;
    }

    public function set($id)
    {
        $aux = self::find($id);
        if (!is_null($aux)) {
            $aux->fill($this->attributes);
            try {
                $this->inicio = date("Y-m-d h:i", strtotime($this->data));
                $this->fim = date("Y-m-d h:i", strtotime($this->data));
                $aux->save();
            } catch (QueryException $ex) {
                return $ex->errorInfo;
            } catch (Exception $ex) {
                return $ex;
            }
            return $aux;
        }
        return false;

    }

    public function remove($id)
    {
        $aux = self::find($id);
        if ($aux) {
            return $aux->delete();
        }
        return false;
    }
}

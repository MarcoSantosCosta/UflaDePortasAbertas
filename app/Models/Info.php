<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Mockery\Exception;

class Info extends Model
{

    protected $fillable = ['grau','titulo','modalidade','regime','turno','duracao','vagas'];
    public function add()
    {
        try{
            $this->save();
        }catch (QueryException $ex) {
            return $ex->errorInfo;
        } catch (Exception $ex) {
            return $ex;
        }
        return $this;
    }

    public function get($id)
    {
        $data = self::find($id);
        if ($data instanceof Info) {
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
        if(!is_null($aux)){
            $aux->fill($this->attributes);
            try{
                $aux->save();
            }catch (QueryException $ex) {
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
        if($aux){
            return $aux->delete();
        }
        return false;
    }
}

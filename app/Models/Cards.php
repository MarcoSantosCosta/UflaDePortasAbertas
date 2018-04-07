<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

class Cards extends Model
{
    protected $fillable = ['titulo','subtitulo','url_imagem', 'descricao', 'secao'];


    public function add()
    {
        try{
            $this->save();
        }catch (QueryException $ex) {
            return $ex->errorInfo;
        } catch (\Exception $ex) {
            return $ex;
        }
        return $this;
    }

    public function get($id)
    {
        $data = self::find($id);
        if ($data instanceof Courses) {
            $data->info;
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
            } catch (\Exception $ex) {
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

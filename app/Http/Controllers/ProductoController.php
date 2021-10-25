<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use DB;

class ProductoController extends Controller
{

    public function listProducto()
    {
        $productos = DB::table('producto')
        ->join('categoria', 'producto.categoria_idCategoria', '=', 'categoria.id')
        ->join('sucursal', 'producto.sucursal_idSucursal', '=', 'sucursal.id')
        ->select('producto.id AS idProducto','producto.nombre', 'categoria.id', 'categoria.nombre AS categoria', 'sucursal.id', 'sucursal.nombre AS sucursal')
        ->where('producto.estado', '=' , 'Abierto')
        ->get();
        
        return view('producto.listProducto',compact('productos'));
    }
    
    public function addProducto()
    {
        $sucursales= DB::table('sucursal')
        ->select('id','nombre')
        ->get();

        $categorias= DB::table('categoria')
        ->select('id','nombre')
        ->get();

        return view('producto.addProducto', compact('sucursales', 'categorias'));
    }

    public function saveProducto(Request $request)
    {
        $producto = DB::table('producto')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fechaCompra' => $request->input('fechaCompra'),
            'comentarios' => '',
            'estado' => 'Abierto',
            'categoria_idCategoria' => $request->input('categoria'),
            'sucursal_idSucursal' => $request->input('sucursal'),
            'created_at' => date('Y-m-d H:i:s')
            ));           

        if ($producto) {
            return redirect()->route('producto.success')->with('successAdd', 'Bien');
        } else {
            return redirect()->back()->withInput()->with('errorAdd', 'Error');
        }
    }

    public function editProducto($id)
    {

        $producto = DB::table('producto')
        ->join('categoria', 'producto.categoria_idCategoria', '=', 'categoria.id')
        ->join('sucursal', 'producto.sucursal_idSucursal', '=', 'sucursal.id')
        ->select('producto.*', 'categoria.nombre AS categoria', 'sucursal.nombre AS sucursal')
        ->where('producto.id', $id)
        ->first();

        return view('producto.editProducto', compact('producto'));
    }

     public function updateProducto(Request $request, $id)
    {
        $edit = DB::table('producto')->where('id', '=', $id)->update(array(
            'comentarios' => $request->input('comentarios'),
            'estado' => $request->input('estado')
        ));


        if ($edit) {
            return redirect()->route('producto.success')->with('successUpd', 'Bien');
        } else {
            return redirect()->route('producto.success')->with('errorUpd', 'Error');
        }
    }

    public function deleteProducto($id)
    {
        $eliminar = DB::table('producto')->whereId($id)->delete();

        if ($eliminar) {
            return redirect()->route('producto.success')->with('successDelete', 'Bien');
        } else {
            return redirect()->route('producto.success')->with('ErrorAct', 'Error');
        } 
    }

    
}

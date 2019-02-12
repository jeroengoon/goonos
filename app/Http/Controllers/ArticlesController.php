<?php

namespace App\Http\Controllers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\User;
use DB;
use Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::orderBy('created_at', 'desc')->paginate(16);

        $articlesCount = count($articles);

        // return $categories;
        return view('articles.index')->with(array('articles'=>$articles,'articlesCount'=>$articlesCount));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $category_titles = Category::select('category_title');
        $category_titles = Category::all('category_title');

        $category_titles = collect($category_titles)->sortBy('category_title')->reverse()->toArray();
        // return $category_titles;
        return view('articles.create')->with('category_titles', $category_titles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $category = $request->input('category');
        $category = json_encode($category);

        // return $category;






        $this->validate($request, [
            'title'             => 'required',
            'description'       => 'required',
            'stock'             => 'required',
            'price'             => 'required',
            'product_image'     => 'required',
            'product_image' => 'image|nullable|max:10000|required'
        ]);

        //Handle file Upload
        if($request->hasfile('product_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('product_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('product_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        //create Article
        $article = new Article;

        if(!Auth::guest()) {
            $article->user_id = auth()->user()->id;
        }
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->stock = $request->input('stock');
        $article->price = $request->input('price');
        $article->category_id = $category;
        $article->product_image = $fileNameToStore; 
        $article->save();

        return redirect('/categories')->with('succes', 'Article Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $article = QueryBuilder::for(Article::class)
        ->allowedFilters('type', 'category_id')
        ->get();
        return view('articles.show')->with('article', $article);

        // return Article::get();
        // if($request){
        // return Article::filter($request)->get();
        // }else{
        //     $article = DB::table('articles')->where('category_id', '=', $id)->get();
        //     return view('articles.show')->with('article', $article);
        //        }    


        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }






    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $article = Article::find($id);
 
        if(!$article) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "id" => $article->id,
                        "title" => $article->title,
                        "quantity" => 1,
                        "description" => $article->description,
                        "price" => $article->price
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $article->id,
            "title" => $article->title,
            "quantity" => 1,
            "description" => $article->description,
            "price" => $article->price
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart(Request $request)
    {

        $product_id = $request->input('id');
        $product_quantity = $request->input('quantity');


        $product_quantity = $product_quantity + 1; 
        //  return $product_quantity;



            $cart = session()->get('cart');

 
            $cart[$product_id]["quantity"] = $product_quantity;

            session()->put('cart', $cart);
            // return $cart;

            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
            return redirect()->back()->with('succes', 'Product quantity succesfully increased');
    }
 
    public function removeCart(Request $request)
    {
        $product_id = $request->input('id');
        $product_quantity = $request->input('quantity');
        $cart = session()->get('cart');

        // return $product_id;

        if($product_quantity >= 2){
            $product_quantity = $product_quantity - 1; 
            $cart[$product_id]["quantity"] = $product_quantity;
        }elseif($product_quantity <= 1){
            unset($cart[$product_id]);
        }




 

           
                session()->put('cart', $cart);
 
            session()->flash('success', 'Product removed successfully');
        
            return redirect()->back()->with('succes', 'Product removed successfully');



    }






















}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Products = Product::with('brand')->with('category')->get();
        $Brands =  Brand::get();
        $Categories =  Category::get();
        $data=[
            'Products'=>$Products,
            'Brands'=>$Brands,
            'Categories'=>$Categories,
        ];
        return view('AllProducts',$data);
    }

    public function allProductSubmit(Request $request)
    {
            // $query = Product::query();
            // // عملية الفلترة
            // if ($request->has('category')) {
            //     $query->where('category', $request->input('category'));
            // }
            // if ($request->has('brand')) {
            //     $query->where('brand', $request->input('brand'));
            // }
            // // عملية البحث
            // if ($request->has('search')) {
            //     $search = $request->input('search');
            //     $query->where(function ($q) use ($search) {
            //         $q->where('name', 'like', "%$search%")
            //         ->orWhere('details', 'like', "%$search%")
            //         ->orWhereHas('category', function ($q) use ($search) {
            //             $q->where('name', 'like', "%$search%");
            //         })
            //         ->orWhereHas('brand', function ($q) use ($search) {
            //             $q->where('name', 'like', "%$search%");
            //         });
            //   });
            // }

            $query = Product::query();

            if ($request->has('search')) {
                $search = $request->input('search');
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%$search%")
                      ->orWhere('details', 'like', "%$search%")
                      ->orWhereHas('category', function ($q) use ($search) {
                          $q->where('name', 'like', "%$search%");
                      })
                      ->orWhereHas('brand', function ($q) use ($search) {
                          $q->where('name', 'like', "%$search%");
                      });
                });
            }

            if ($request->has('brand')) {
                $brands = $request->input('brand');
                $query->whereIn('brand_id', $brands);
            }

            if ($request->has('category')) {
                $categories = $request->input('category');
                $query->whereIn('category_id', $categories);
            }
            $Products = $query->get();
            $Brands =  Brand::get();
            $Categories =  Category::get();

            // إرجاع النتائج إلى العرض
            $data=[
                'Products'=>$Products,
                'Brands'=>$Brands,
                'Categories'=>$Categories,
            ];
            return view('AllProductsSubmit',$data);
    }

    public function searchProducts(Request $request)
    {
        $search = $request->input('search', '');
        $brands = $request->input('brand', []);
        $categories = $request->input('category', []);

        $query = Product::query();

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                    ->orWhere('details', 'like', "%$search%")
                    ->orWhereHas('category', function ($q) use ($search) {
                        $q->where('name', 'like', "%$search%");
                    })
                    ->orWhereHas('brand', function ($q) use ($search) {
                        $q->where('name', 'like', "%$search%");
                    });
            });
        }

        if (!empty($brands)) {
            $query->whereIn('brand_id', $brands);
        }

        if (!empty($categories)) {
            $query->whereIn('category_id', $categories);
        }

        $Products = $query->get();
        $Brands =  Brand::get();
        $Categories =  Category::get();


        $data=[
            'Products'=>$Products,
            'Brands'=>$Brands,
            'Categories'=>$Categories,
        ];
        return view('AllProductsLive',$data);
}


    public function filterProducts(Request $request)
    {
        $query = Product::query();

        // تنفيذ تصفية البحث
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('name', 'like', "%{$searchTerm}%");
        }

        // تنفيذ تصفية العلامة التجارية
        if ($request->has('brands')) {
            $brands = $request->input('brands');
            $query->whereIn('brand_id', $brands);
        }

        // تنفيذ تصفية الفئة
        if ($request->has('categories')) {
            $categories = $request->input('categories');
            $query->whereIn('category_id', $categories);
        }

        $Products = $query->get();
        $Brands =  Brand::get();
        $Categories =  Category::get();


        $data=[
            'Products'=>$Products,
            'Brands'=>$Brands,
            'Categories'=>$Categories,
        ];
        return view('AllProducts-filter',$data);

        // return response()->json($products);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

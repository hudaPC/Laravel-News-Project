@extends('layouts.main')
@section('title')
    HOME PAGE
@endsection

@section('content')
   <h4>Home content</h4> 
   {{-- Include an external blade --}}
   @for ($i = 0; $i <10; $i++)
    @include('components.product-ui',[
        'id' => $i,
    ])
   @endfor
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste consectetur ea voluptas possimus, voluptate mollitia. Similique, nam. Voluptatem nihil iste voluptatum sint nisi, soluta commodi esse natus veritatis. Atque, dolorem!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores beatae vitae magnam, modi at atque expedita repellendus. Deserunt fugiat provident asperiores, voluptas, quam nesciunt fugit reiciendis harum, aperiam ad deleniti.</p>
@endsection
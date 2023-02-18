@extends('layouts.app')
@section('title') ABOUT @endsection
@section('content')
<style>
@media(max-width:999.999px){
    .about-us-parent{
    display: flex;
    flex-direction: column;
    }
}
@media(min-width:1000px){
    .about-us-parent{
    display: flex;
    flex-direction: row;
    gap: 20px;     
    }  

    #about-us-childs{
        width: 70%;
    }
}
</style>

{{-- let's Start our code here --}}

<a href="{{ route('products.index') }}">
    <x-fas-home style="width: 15px; color:gray;"/>
</a>
<x-ri-arrow-right-s-line style="width: 20px; color:gray;"/>
About Us 
<br><br>
<div class="about-us-parent">
    <div class="about-us-childs" id="about-us-childs">
        <h3>Welcome To Shop</h3><br>
        <div style="display: flex; flex-direction: row;">        
        <div class="about-us-childs-of-childs">
            <img src="https://www.sigma-computer.com/image/catalog/about/about-us.jpg" alt="">
        </div>
        <div class="about-us-childs-of-childs" style="color:gray; margin: 0px 20px 0px 20px;">
            <p>
                Sigma Computer is a company specializing in retail and wholesale electronics including laptops, computers and accessories.
            </p>
            <p>                
                Sigma Computer has been established since 2005 in Egypt. It is engaged in wholesale sale, Sigma as a first stage and retailing for more than 14 years in Egypt. Toby has 4 branches in the largest and most famous commercial centers in Egypt.
            </p>
        </div>  
    </div>      
    </div>
    <br><br>
    <div class="about-us-childs">
        <h3>Why Choose Us</h3><br>
        <ul>
            <li class="list-group-item"><x-entypo-check style="width: 24px; color:gray" />&nbsp;
                Shipping & Returns
            </li><br>
            <li class="list-group-item"><x-entypo-check style="width: 24px; color:gray" />&nbsp;
                Secure Shopping
            </li><br>
            <li class="list-group-item"><x-entypo-check style="width: 24px; color:gray" />&nbsp;
                Online Support
            </li><br>
            <li class="list-group-item"><x-entypo-check style="width: 24px; color:gray" />&nbsp;
                Order Protection
            </li><br>
            <li class="list-group-item"><x-entypo-check style="width: 24px; color:gray" />&nbsp;
                Promotion Gift
            </li>            
        </ul>
    </div>
</div>

{{-- End of code --}}
@endsection
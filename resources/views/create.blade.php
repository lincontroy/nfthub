@extends('layouts.main')
 
@section('content')

 <!-- create new product area -->
 <div class="create-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
              

                <div class="col-lg-7">
                    <div class="form-wrapper-one">
                        <form class="row" action="{{url('nftpost')}}" method="post" enctype='multipart/form-data'>
                            @csrf
                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="name" class="form-label">Nft Name</label>
                                    <input id="name" name="name" placeholder="e. g. `Digital Awesome Game`">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="Discription" class="form-label">Discription</label>
                                    <textarea id="Discription" name="desc" rows="3" placeholder="e. g. “After purchasing the product you can get item...”"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="dollerValue" class="form-label">Item Price in $</label>
                                    <input id="dollerValue" name="price" placeholder="20">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="input-box pb--20">
                                    <label for="dollerValue" class="form-label">Image representation</label>
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <br>

                            <div class="col-md-12 col-xl-8 mt_lg--15 mt_md--15 mt_sm--15">
                                <div class="input-box">
                                    <button type="submit" class="btn btn-primary btn-large w-100">Submit Item</button>
                                </div>
                            </div>

                          

                        </form>
                    </div>

                </div>

                
            </div>
        </div>
    </div>
    <!-- create new product area -->


   

@endsection


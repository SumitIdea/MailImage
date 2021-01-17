<form method="post" action="{{ route('dashboard.store') }}" enctype="multipart/form-data" role="form" class="form-horizontal" id="location">
    @csrf
    <div class="form-group">
        <label for="name">name </label>
        <input type="text"  class="w-100 p-1" name="name" />
    </div>

    <div class="form-group">
        <label for="email">email </label>
        <input type="email" class="w-100  p-1" name="email" />
    </div>

    <div class="form-group">
            <label for="resume" placeholder="(resume type *PDF*)">Resume:<span class="text-danger font-weight-bold">*</span></label>
            <input type="file" class="w-100 p-1" name="image" value="{{old('resume')}}"/>
            <label class="text-danger mt-1" >(*File type- PDF & Maximum size 1 MB*)</label>
    </div>
    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                   
</form>

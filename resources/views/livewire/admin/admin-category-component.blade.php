<div>
   <div class="container" style="padding:30px 0;">
         <div class="row">
             <div class="col-md-12">
                 <div class="pane panel-default">
                     <div class="panel-heading">
                         Toutes les Catégories
                     </div>
                     <div class="panel-body">
                         <table class="table table-striped">
                             <thead>
                                 <tr>
                                     <th>Id</th>
                                     <th>Category Name</th>
                                     <th>Slug</th>
                                     <th>Action</th>
                                 </tr>  
                             </thead>
                             <tbody>
                                 @foreach ($categories as $category)
                                     <tr>
                                         <td>{{$category->id}}</td>
                                         <td>{{$category->name}}</td>
                                         <td>{{$category->slug}}</td>
                                         <td></td>
                                     </tr>
                                 @endforeach
                             </tbody>
                         </table>
                     </div>
                     {{$categories->links()}}
                 </div>
             </div>
         </div>
   </div>
</div>

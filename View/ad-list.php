<ad-header><i class="fas fa-list"></i> List</ad-header>
<table id="blog-list" class="hover row-border">
    <thead>
        <tr>
        	<th>Title</th>
        	<th>Category</th>
        	<th>Author</th>
        	<th>Status</th>
        	<th>Date</th>
        	<th>Views</th>
            <th>Likes</th>
        	<th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $posts = (new DB())->From("posts")->get();
            foreach($posts as $post){

                //Get Category name
                $cate = (new DB())->From("categories")->Id($post['category_id'])->get();
                //Get Author name
                $auth = (new DB())->From("authors")->Id($post['author_id'])->get();
                //Check Status of post
                $status = $post['status'] ? "Censored":"Uncensored";  
        ?>

        <tr>
            <td><?php echo $post['eng_title'] ?></td>
            <td><?php echo $cate[0]['category'] ?></td>
            <td><?php echo $auth[0]['penname'] ?></td>
            <td><?php echo $status ?></td>
            <td><?php echo $auth[0]['date'] ?></td>
            <td><?php echo $post['views'] ?></td>
            <td><?php echo $post['likes'] ?></td>
            <td><a href="/admincp/Post-edit/<?php echo $post['id'] ?>" 
                class="list-cog <?php fillAuthOfPost($post['author_id']); ?>"><i class="fas fa-pen"></i></a></td>
        </tr>

        <?php } ?>
       
        
    </tbody>
</table>

<note>
    <note-brand>Note</note-brand>
    Author can only change his/her own Post.
</note>
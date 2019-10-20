<ad-header><i class="fas fa-gavel"></i> Censorship</ad-header>
<table id="cen-list" class="row-border">
	<thead>
        <tr>
        	<th>Title</th>
        	<th>Category</th>
        	<th>Author</th>
            <th>Status</th>
        	<th>Date</th>
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
            <td>123</td>
            <td><a href="/admincp/Censor-edit/<?php echo $post['id'] ?>" 
                class="list-cog"><i class="fas fa-pen"></i></a></td>
        </tr>

        <?php } ?>     
    </tbody>
</table>


<?php
$ss_event_args = array(
    'posts_per_page'   => 5,
    'offset'           => 0,
    'post_type'        => 'event',
    'tax_query' => array(
        array(
            'taxonomy' => 'event-type',
            'field' => 'slug',
            'terms' => array('sunday-service'))
    ),
    'meta_key'			=> 'date',
    'orderby'			=> 'meta_value_num',
    'order'            => 'DESC',
    'post_status'      => 'publish'
);

$ss_events = get_posts( $ss_event_args );
$ss_events_arr = array();
foreach($ss_events as $post){
    setup_postdata( $post );
    $ss_events_arr[] = array(
        'url' => get_permalink($post->ID),
        'title' => get_field('sub_title'),
        'summary' => get_field('summary'),
        'sermon' => get_field('sermon'),
        'date' => date('d M Y', strtotime(get_field('date'))),
        'youtube_id' => get_field('sermon_youtube_id'),
        'recorded_media' => get_field('recorded_media'),
        'banner' => get_field('banner_image')
    );
}
wp_reset_postdata();
?>

<section>
	<div class="container">
		<header>
			<h1>Sermon</h1>
		</header>
		<table class="table table-hover table-bordered table-striped table-sermon text-center">
			<thead>
				<tr>
					<th>No</th>
					<th>Topic</th>
					<th>Preacher</th>
					<th>Date</th>
					<th>Youtube</th>
					<th>Audio</th>
				</tr>
			</thead>
			<tbody>

			<?php foreach($ss_events_arr as $key => $ss_event){ ?>
				<tr>
					<td><?php echo ($key+1); ?></td>
					<td><a href="<?php echo $ss_event['url']; ?>"><?php echo $ss_event['title']; ?></a></td>
					<td><?php echo $ss_event['sermon']; ?></td>
					<td><?php echo $ss_event['date']; ?></td>
					<td><?php if(!empty($ss_event['youtube_id'])){ ?>
						<a href="http://www.youtube.com/watch?v=<?php echo $ss_event['youtube_id']; ?>">
							<img src="https://www.youtube.com/yt/brand/media/image/YouTube-icon-full_color.png" alt="link" height="42" width="42">
						</a>
						<?php } else { ?>not available<?php } ?>
					</td>
					<td><?php if(!empty($ss_event['recorded_media'])){ ?>
						<a href="<?php echo $ss_event['recorded_media']; ?>">recorded audio</a>
						<?php } else { ?>not available<?php } ?>
					</td>
				</tr>
			<?php } ?>

			<tbody>
		</table>
	</div>
</section>
 <?php if ($this->options->imgtuis): ?>
<div class="list-featured list-scroll-x mb-3 mb-md-4">
<div class="row row-sm list-grouped my-n2">
<?php 
$lunbo = $this->options->imgtuis;
$hang = explode(",", $lunbo);
$n=count($hang);
$html="";
for($i=0;$i<$n;$i++){
$this->widget('Widget_Archive@imgtuis'.$i, 'pageSize=1&type=post', 'cid='.$hang[$i])->to($ji);
if($ji->fields->thumb){$img=$ji->fields->thumb;}
if($i==0){$no=" sx_no";}else{$no="";}

$html=$html.'<div class="col-6 col-md-4 d-flex py-2">
                    <div class="list-item block m-0">
                        <div class="media media-21x9">
                            <a class="media-content" href="'.$ji->permalink.'" target="_blank" style="background-image: url('.$ji->fields->img.');"></a>
                        </div>
                        <div class="list-content p-1 p-md-2">
                            <div class="list-body text-center">
                                <a href="'.$ji->permalink.'" target="_blank" class="list-title">'.$ji->title.'</a>
                            </div>
                        </div>
                    </div>
                </div>';

}
echo $html;
?>

</div>
</div>

<?php endif; ?>
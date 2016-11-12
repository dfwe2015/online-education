<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\wamp64\www\web\Edu\public/../application/admin\view\video\add.html";i:1478092225;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="__PUBLIC__/css/pintuer.css">
<link rel="stylesheet" href="__PUBLIC__/css/admin.css">
<script src="__PUBLIC__/js/jquery.js"></script>
<script src="__PUBLIC__/js/pintuer.js"></script>
<script src="__PUBLIC__/js/ajax.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('Video/check'); ?>" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>视频名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="videoname" data-validate="required:请输入视频" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>缩略图：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="picname" class="input tips" style="width:25%; float:left;"  value=""   data-toggle="hover" data-place="right" data-validate="required:请上传缩略图" />
            <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>视频：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="name" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-validate="required:请上传视频" />
            <div class="tipss">视频上传:不超过10M的MP4/flv格式</div>
        </div>
      </div>


        <div class="form-group">
          <div class="label">
            <label>所属分类：</label>
          </div>
          <div class="field">
              <select class="link_age" change-select="link_tow" >
                  <?php if(is_array($result) || $result instanceof \think\Collection): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <option value="<?php echo $vo['id']; ?>" id="video" ><?php echo $vo['name']; ?></option>

                  <?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
              <select class="link_tow" change-select="link_tow" name="id" ></select>

            <div class="tips"></div>
          </div>
        </div>


      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="descr" style=" height:90px;" data-validate="required:请输入该课程的描述"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
    $('.link_age').change(function(){
        var objectModel = {};
        var value = $(this).val();
        var type = $(this).attr('id');
        var change_select = $(this).attr('change-select');

        $.ajax({
            type:"POST",
            url:"<?php echo url('Jsonn/add'); ?>",
            dataType:"json",
            data:{type:value},
            timeout:30000,
            error:function(){
                alert("Error:"+"请检查错误!");
            },
            success:function(data){
                $("." + change_select).empty();
                var count = data.length;
                var i = 0;
                var b = "";
                if (count > 0) {
                    for ( i = 0; i < count; i ++) {
                        b += "<option value='" + data[i].id + "'>";
                        b += data[i].name+"</option>";
                    }
                    //console.log(b);
                }
                $("." + change_select).append(b);
               // console.log(change_select);
            }
        });
    });
</script>
</body></html>
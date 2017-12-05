<?php
use yii\helpers\Url;
?> 
<meta charset="utf8">

<style>
table{ border-collapse: collapse; border: 1px solid #ddd; width: 800px; margin: 0 auto;margin-top: 50px; background: rgba(121, 217, 221, 0.4); color: #666}
table tr{ height: 40px;}
table td{ border: 1px solid #ddd; text-align: center}

*{margin: 0; padding:0 ; font-family: 微软雅黑}
a{ text-decoration: none; color: #666;}
ul{ list-style: none}

.top{ width: 100%; background: rgba(14, 196, 210, 0.99); color: #fff; height: 100px; line-height: 150px; text-align: right;}
.top span{ margin-right: 20px}


.left{ width: 260px; float: left; height: 100%; background: rgba(121, 217, 221, 0.4)}
.left ul{ list-style: none; width: 100%;}
.left ul li{ height: 40px; width: 100%; border: 1px solid #ddd; line-height: 40px; text-align: center;}
.left .selected{ background: rgba(14, 196, 210, 0.99);}
.left .selected a{ color: #fff;}


.right{ float: left; width: 1000px;}
.search-box{ width: 900px; margin: 0 auto; margin-top: 100px; }
.right li{
    margin-top: 20px;
}
.right span{
    display: inline-block;
    width: 200px;
    line-height: 40px;
    height: 40px;
    text-align: right;
    margin-right: 20px;
}

.right .filed-name{
    width: 300px;
    line-height: 40px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 3px;
    font-size: 14px;
}

.right .length{
    width: 140px;
    line-height: 40px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 3px;
    font-size: 14px;
}

.submit{
    width: 150px;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    border: 1px solid #ddd;
    display: inline-block;
    background: rgba(14, 196, 210, 0.99);
    color: #fff;
    text-align: center;
    margin-left: 200px;
    margin-top: 20px;
}
</style>

<div class="top">
    <span>欢迎管理员：admin</span>
</div>

<div class="left">
    <ul>
        <li><a href="./index.html">查看注册字段</a></li>
        <li class="selected"><a href="#">添加注册字段</a></li>
    </ul>
</div>
<center>
<div class="right">
    <div class="search-box">
        <form action="<?= Url::toRoute(['demo/add'])?>" method="post">
            
           <input type="hidden" name="id" value="<?=$field['id']?>">
            <ul>
                <li>
                    <span>请输入字段名称：</span>
                    <input class="filed-name" type="text" name="zd_name" value="<?=$field['zd_name']?>">
                </li>
                <li>
                    <span>请输入字段默认值：</span>
                    <input class="filed-name" type="text" name="zd_val" value="<?=$field['zd_val']?>">
                </li>
                <li>
                    <span>请选择字段类型：</span>
                    <select name="zd_type" >
                         <?php if($field['zd_type']=='input-text'){ ?>
                            <option value="input-text" selected>文本框</option>
                        <?php }else{?>
                            <option value="input-text">文本框</option>
                        <?php } ?>
                         <?php if($field['zd_type']=='input-radio'){ ?>
                            <option value="input-radio" selected>单选框</option>
                        <?php }else{?>
                            <option value="input-radio">单选框</option>
                        <?php } ?>
                          <?php if($field['zd_type']=='input-password'){ ?>
                            <option value="input-password" selected>密码框</option>
                        <?php }else{?>
                            <option value="input-password">密码框</option>
                        <?php } ?>
                           <?php if($field['zd_type']=='textarea'){ ?>
                            <option value="textarea" selected>文本域</option>
                        <?php }else{?>
                            <option value="textarea">文本域</option>
                        <?php } ?>
                    </select>
                </li>
                <li>
                    <span>是否必填：</span>
                    <?php if($field['status']==1){ ?>
                        <input type="checkbox" value="1" name="status" checked>必填
                    <?php }else{?>
                            <input type="checkbox" value="0" name="status">必填
                    <?php }  ?>
                    
                        
            
                </li>
                <li>
                    <span>请选择验证规则：</span>
                    <select name="yz">
                         <?php if($field['yz']=='无'){ ?>
                            <option value="无" selected>无</option>
                        <?php }else{?>
                            <option value="无">无</option>
                        <?php } ?>
                          <?php if($field['yz']=='phone'){ ?>
                            <option value="phone" selected>手机号码</option>
                        <?php }else{?>
                            <option value="phone">手机号码</option>
                        <?php } ?>

                          <?php if($field['yz']=='length'){ ?>
                            <option value="length" selected>长度</option>
                        <?php }else{?>
                            <option value="length">长度</option>
                        <?php } ?>

                    </select>
                </li>
                <li>
                    <span>请选择填写长度范围：</span>
                    <input class="length" type="text" value="<?=$xz['0']?>" placeholder="请输入最小长度" name='xz_min'>
                    ~
                    <input class="length" type="text" value="<?=$xz['1']?>" placeholder="请输入最大长度"  name='xz_max'>
                </li>
                <li>
                    <input type="submit"  class="submit">
                </li>
            </ul>
        </form>
    </div>
</div>
</center>
<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2020-01-02 16:27
 * @File name           : _modal_topic.php
 */

?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?=  __('Select the topic you are interested in'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="topic d-flex flex-wrap justify-content-center p-0">
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=TIK&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/0-chemical.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Komputer dan Teknologi'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=PPKN&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/custom_logo/PPKN.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Pendidikan Pancasila & Kewarganegaraan'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=MTK&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/custom_logo/calculator.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Matematika'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=HDS&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/custom_logo/hadist.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Hadits'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=ARB&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/custom_logo/arabic.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Bahasa Arab'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=SBK&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/custom_logo/teamwork.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Seni Budaya'); ?>
                        </a>
                    </li>
                    <!-- <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=6&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/6-blackboard.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Applied Sciences'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=7&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/7-quill.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Art & Recreation'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=8&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/8-books.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Literature'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=9&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/9-return-to-the-past.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('History & Geography'); ?>
                        </a>
                    </li> -->
                </ul>
            </div>
            <div class="modal-footer text-muted text-sm">
                <div>Icons from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
            </div>
        </div>
    </div>
</div>

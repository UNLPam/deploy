<?php if ($marks_count > 1): ?>
  <div class="teacher_signature_box">
    <div class="titletable"><span>1°B</span></div>
    <div style="margin-top: 16%">
      <div align="center">_________________________</div>
      <div align="center"><?php echo __('Professor signature') ?></div>
      <br>
      <div align="center"><?php echo __('Fecha') ?> _____ / _____ / _____ </div>
    </div>
  </div>
  <div class="teacher_signature_box">
    <div class="titletable"><span>2°B</span></div>
    <div style="margin-top: 16%">
      <div align="center">_________________________</div>
      <div align="center"><?php echo __('Professor signature') ?></div>
      <br>
      <div align="center"><?php echo __('Fecha') ?> _____ / _____ / _____ </div>
    </div>
  </div>
<?php else: ?>
  <?php include_partial('quaterly_of_a_term_boxes'); ?>
<?php endif; ?>

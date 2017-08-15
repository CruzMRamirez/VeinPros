(function ($, root, undefined) {

	$(function () {

		'use strict';
		var ClosureFastProcedurehtml = '<div class="row backdwhite">' +
																				'<div class="col-md-7">' +
																					'<h2>The ClosureFast Procedure</h2>' +
																					'<p>New to our clinic is the ClosureFast procedure, a varicose vein treatment that uses a radiofrequency ablation technique, minimizing pain and recovery time with consistently reliable success rates. Performed on an outpatient basis, patients can experience relief of symptoms in as little as two days.</p>' +
																					'<p class="bold-p">The Procedure</p>' +
																					'<p>First, a local anesthetic is applied prior to the procedure. Then, using ultrasound guidance, a small incision is made in the skin and the ClosureFast catheter is inserted into the vein. Using radiofrequency energy, the catheter heats the diseased vein, causing it to collapse. The catheter is withdrawn into the next section of vein, and the process is repeated until the whole vein has been treated. The insertion site is then bandaged and patients are discharged, returning to normal activities within a few days.</p>' +
																				'</div>' +
																				'<div class="col-md-5">' +
																					'<img src="/wp-content/uploads/2017/07/vnus-catheter-ablation-diagram.jpg" class="CFPimg img-responsive" alt="vnus-catheter-ablation diagram">' +
																				'</div>' +
																			'</div>';

    $("#Closure").click(function(){
     $(".backdwhite").replaceWith(ClosureFastProcedurehtml);
});

		var EndovenousLaserhtml = '<div class="row backdwhite">' +
																'<div class="col-md-7">' +
																	'<h2>Endovenous Laser</h2>' +
																	'<p>Although the use of the medical laser has been around for a number of years, it has only recently been applied to the treatment of larger varicose veins. If you require laser vein removal in Fresno, CA, you can be assured that we use the most state-of-the-art laser available—the Diomed 810 nm diode laser.</p>' +
																	'<p class="bold-p">The Procedure</p>' +
																	'<p>The endovenous laser procedure is performed right here in the office. After local anesthesia is given to a small area on the leg, the tiny laser fiber is guided into the varicose vein. The laser is then turned on, and as it is slowly withdrawn, the laser energy seals the vein shut.</p>' +
																	'<p>The patient is usually back to near normal activities the next day. Support hose is worn for about a week. Sclerotherapy injections may then be done on the remaining varicose veins. Endovenous laser treatments are over 95% successful in closing the targeted veins.</p>' +
																'</div>' +
																'<div class="col-md-5">' +
																	'<img src="/wp-content/uploads/2017/08/VeinPros19.jpg" class="CFPimg img-responsive" alt="EndovenousLaser">' +
																'</div>'
															'</div>';

		$("#Endovenous").click(function(){
 		 $(".backdwhite").replaceWith(EndovenousLaserhtml);
});

		var UltrasoundGuidedhtml = '<div class="row backdwhite">' +
																	'<div class="col-md-7">' +
																		'<h2>Ultrasound-Guided Sclerotherapy</h2>' +
																		'<p>Ultrasound technology enables doctors to see veins that are hidden under the surface of the skin. Often, these hidden veins are the culprits that are causing the problems further down the leg. Ultrasound technology allows us not only to locate and identify hidden problem veins, but to treat them as well.</p>' +
																		'<p class="bold-p">The Procedure</p>' +
																		'<p>Sclerotherapy is a technique that involves the injection of a solution into varicose veins, which does not require anesthesia. To minimize discomfort, very small \“baby\” needles are used to inject the solution into the veins. The solution injected has been successfully used for the last fifty years, and found to be very safe, and does not harm other parts of the body. The injection causes the varicose veins to shrivel and gradually disappear.</p>' +
																		'<p>Small spider veins require about two months to completely fade, whereas larger varicose veins may require three to four months to disappear. Laser treatment for spider veins is usually not as effective as sclerotherapy.</p>' +
																	'</div>' +
																	'<div class="col-md-5">' +
																	 	'<img src="/wp-content/uploads/2017/08/VeinPros26.jpg" class="CFPimg img-responsive" alt="Ultrasound">' +
																	'</div>' +
																'</div>';

	$("#Ultra").click(function(){
 	 $(".backdwhite").replaceWith(UltrasoundGuidedhtml);
});

		var Microphlebectomyhtml = '<div class="row backdwhite">' +
																	'<div class="col-md-7">' +
																		'<h2>Micro-Phlebectomy</h2>' +
																		'<p>This procedure may be performed in conjunction with radiofrequency ablation vein treatment or other therapies for varicose veins.</p>' +
																		'<p class="bold-p">The Procedure</p>' +
																		'<p>Under local anesthetic and sterile technique, multiple small incisions are made along the course of the enlarged veins. The veins are then removed using a small instrument similar to a small crochet hook. There is usually very little discomfort. The leg is wrapped and the incisions heal with minimal scarring.</p>' +
																		'<p>*Note: Not all patients will be candidates for endovenous laser or the VNUS Closure procedure. Your treatment will be a result of what will best suit your individual condition.</p>' +
																	'</div>' +
																	'<div class="col-md-5">' +
																		'<img src="/wp-content/uploads/2017/08/VeinPros5.jpg" class="CFPimg img-responsive" alt="Micro-Phlebectomy">' +
																	'</div>' +
																'</div>';

	$("#Micro").click(function(){
 	 $(".backdwhite").replaceWith(Microphlebectomyhtml);
});



	});

})(jQuery, this);

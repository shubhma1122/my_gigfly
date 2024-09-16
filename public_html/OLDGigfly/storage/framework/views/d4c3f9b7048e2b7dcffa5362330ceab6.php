<div class="w-full md:max-w-xl mx-auto grid items-center justify-center">
		
		
		<div class="text-sm font-medium text-gray-400 mb-8 text-center">
			Please use the following commands in Cron Jobs on your server.<br>
			If you have any problem, please contact the author.
		</div>

		
		<div class="grid space-y-4 mb-8">
			
			
			<kbd class="px-2 py-1.5 text-sm font-semibold text-gray-800 bg-gray-200 border border-gray-300 rounded-md">
				<?php echo e($command_queue, false); ?>

			</kbd>
	
			
			<kbd class="px-2 py-1.5 text-sm font-semibold text-gray-800 bg-gray-200 border border-gray-300 rounded-md">
				<?php echo e($command_schedule, false); ?>

			</kbd>

		</div>

</div>
<?php /**PATH /home/u344139974/domains/gigfly.in/public_html/OLDGigfly/resources/views/livewire/admin/system/crontab.blade.php ENDPATH**/ ?>
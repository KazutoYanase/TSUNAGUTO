jQuery(function(){
	
	var _q_cnt = 0,
		_current,
		_next,
		_a1 = 0,
		_a2 = 0,
		_a3 = 0,
		_a4 = 0,
		_b1 = 0,
		_b2 = 0,
		_b3 = 0,
		_b4 = 0,
		_b5 = 0,
		_max;
	
	$('#ochart__start').on('click', function() {

		_q_cnt++;
		$('#ochart__top').hide();
		$('#ochart__q__1').fadeIn();
		
	});
	
	$('.ochart__q__btn a').on('click', function() {
		
		_point = $(this).data('point');
		_point_array = _point.split(",");
		
		for(i = 0; i < _point_array.length; i++ ) {
			switch (_point_array[i]) {
				case 'a1':
					_a1++;
					$('#point_data_a1').text(_a1);
					break;
				case 'a2':
					_a2++;
					$('#point_data_a2').text(_a2);
					break;
				case 'a3':
					_a3++;
					$('#point_data_a3').text(_a3);
					break;
				case 'a4':
					_a4++;
					$('#point_data_a4').text(_a4);
					break;
				case 'b1':
					_b1++;
					$('#point_data_b1').text(_b1);
					break;
				case 'b2':
					_b2++;
					$('#point_data_b2').text(_b2);
					break;
				case 'b3':
					_b3++;
					$('#point_data_b3').text(_b3);
					break;
				case 'b4':
					_b4++;
					$('#point_data_b4').text(_b4);
					break;
				case 'b5':
					_b5++;
					$('#point_data_b5').text(_b5);
					break;
				default:
			}
		}
		
		_current = _q_cnt;
		_q_cnt++;
		
		// go next page
		//
		if(_current <= 4) {
			
			$('#ochart__q__'+_current).hide();
			$('#ochart__q__'+_q_cnt).fadeIn();
			
		// result
		//
		} else {
			
			var _point_data = {
				a1: _a1, 
				a2: _a2, 
				a3: _a3, 
				a4: _a4, 
				b1: _b1, 
				b2: _b2, 
				b3: _b3, 
				b4: _b4, 
				b5: _b5
			};
			
			/*
			同点の場合の順位
			1：B-1/ヒキシメ茶
			2：B-2/リセット茶
			3：B-3/ウツクシ茶
			4：B-4/スッキリ茶
			5：B-5/ヌクモリ茶
			6：A-2/特選釜炒り茶
			7：A-1/三塾番茶
			8：A-4/和烏龍茶
			9：A-3/和紅茶
			*/
			
			_max = 'b1';
			
			if(_point_data[_max] < _b2) {
				_max = 'b2';
			}
			if(_point_data[_max] < _b3) {
				_max = 'b3';
			}
			if(_point_data[_max] < _b4) {
				_max = 'b4';
			}
			if(_point_data[_max] < _b5) {
				_max = 'b5';
			}
			if(_point_data[_max] < _a2) {
				_max = 'a2';
			}
			if(_point_data[_max] < _a1) {
				_max = 'a1';
			}
			if(_point_data[_max] < _a4) {
				_max = 'a4';
			}
			if(_point_data[_max] < _a3) {
				_max = 'a3';
			}
			
			//console.log(_max);
			
			$('#ochart__q__5').hide();
			$('#ochart__result__'+_max).fadeIn();
		}
		
	});

});



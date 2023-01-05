function quize() {
	const quize = document.querySelector('.quize');
	const quizeStart = quize.querySelector('.quize-start');
	const quizeForm = quize.querySelector('.quize form');
	const quizeFinish = quize.querySelector('.quize-finish');
	const quizeSuccess = quize.querySelector('.quize-success');
	const quizeSuccessClose = quize.querySelector('.quize-successclose');
	const quizeClose = quize.querySelectorAll('.quize-close');
	const quizeNext = quize.querySelectorAll('.quize-next');
	const step = quize.querySelectorAll('.step');
	const prev = quize.querySelectorAll('.quize-back');
	const forward = quize.querySelectorAll('.quize-forward');
	let data = {};
	let currentStep = 0;

	quizeNext.forEach(next => {
		next.addEventListener('click', (e) => {
			stepNext(currentStep, e.target);	

			if (e.target.getAttribute('type') != 'checkbox') {
				if (currentStep > 0) setLocalStorage(currentStep);

				currentStep++;
			}
		});
	});

	forward.forEach(forward => {
		forward.addEventListener('click', (e) => {
			stepNext(currentStep);	
			if (currentStep > 0) setLocalStorage(currentStep);
			currentStep++;
		});
	});

	prev.forEach(btn => {
		btn.addEventListener('click', (e) => {
			e.preventDefault();
			currentStep--;
			showPrev(currentStep);		
		});
	});

	quizeClose.forEach(btn => {
		btn.addEventListener('click', (e) => {
			e.preventDefault();
			step.forEach(step => step.classList.remove('quize-fade'));
			quizeSuccessClose.classList.add('quize-fade');
		});
	});

	function stepNext(index, input) {	
		if (input == undefined || input.getAttribute('type') != 'checkbox') {
			setTimeout(() => {
				if (index < step.length) {
					step[index].classList.add('quize-fade');
					step[index].previousElementSibling.classList.remove('quize-fade');
				} else {
					quizeFinish.classList.add('quize-fade');
					step[index - 1].classList.remove('quize-fade');
				}			
			}, 200);
		}
	}

	function showPrev(index) {
		setTimeout(() => {
			if (index > 0) {
				step[index].classList.remove('quize-fade');
				step[index - 1].classList.add('quize-fade');
			} else {
				step[index].classList.remove('quize-fade');
				quizeStart.classList.add('quize-fade');
			}	
		}, 200);		
	}

	function setLocalStorage(index) {
		const query = step[index - 1];

		if (query.querySelector('.quize-body') != null) {
			let title = '';
			let cont = '';

			if (query.classList.contains('checkbox-list')) {
				title = query.querySelector('.quize-body').dataset.title;
				query.querySelectorAll('input:checked').forEach(input => {
					cont += input.value + ', ';
				});
			} else {
				title = query.querySelector('.quize-body').dataset.title;
				cont = query.querySelector('input:checked').value;
			}

			data[index] = {title, cont};
			console.log(data);
		}
	}

	quizeForm.onsubmit = (e) => {
		e.preventDefault();

		const name = e.target.name.value;
		const tel = e.target.tel.value;
		const utm_source = (e.target.utm_source != undefined) ? e.target.utm_source.value : '';
		const utm_medium = (e.target.utm_medium != undefined) ? e.target.utm_medium.value : '';
		const utm_campaign = (e.target.utm_campaign != undefined) ? e.target.utm_campaign.value : '';
		const utm_term = (e.target.utm_term != undefined) ? e.target.utm_term.value : '';
		const utm_content = (e.target.utm_content != undefined) ? e.target.utm_content.value : '';
		
		const message = `
		*Заявку на работу*
		*Имя*: ${name}				
		*Тел*: ${tel}

		*Крок 1*: ${data[1].cont}
		*Крок 2*: ${data[2].cont}
		*Крок 3*: ${data[3].cont}
		*Крок 4*: ${data[4].cont}
		*Крок 5*: ${data[5].cont}
		*Крок 6*: ${data[6].cont}
		*Крок 7*: ${data[7].cont}
		
		*utm source*: ${utm_source}
		*utm medium*: ${utm_medium}
		*utm campaign*: ${utm_campaign}
		*utm term*: ${utm_term}
		*utm content*: ${utm_content}
		`;
		
		/*
		*utm source*: ${utm_source}
		*utm medium*: ${utm_medium}
		*utm campaign*: ${utm_campaign}
		*utm term*: ${utm_term}
		*utm content*: ${utm_content}
		*/

		// https://api.telegram.org/bot5819943977:AAGdnfbPUoUp1gFAlKLTFP09kC2SN_o2C9k/getUpdates
		const token = '5819943977:AAGdnfbPUoUp1gFAlKLTFP09kC2SN_o2C9k';
		// const chat_id = '1206443525'; //serv
 		const chat_id = '483570610'; //loc
        const changeMessage = encodeURI(message).replace('_', '+');
		let url = 'https://api.telegram.org/bot' + token + '/sendMessage?chat_id=' + chat_id + '&parse_mode=MarkdownV2&text=' + changeMessage;				

		let xhttp = new XMLHttpRequest();
		xhttp.open("GET", url, true);
		xhttp.send();

		xhttp.onload = function() {
			if (xhttp.status == 200) {
			    window.location = '/?success=1';
			} else {
				console.log('Error');
			}
		};
		
		// quizeForm.submit();
	}
}

quize();
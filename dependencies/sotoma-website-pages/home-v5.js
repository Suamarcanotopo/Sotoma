(() => {'use strict';
  const PHONE={claudia:'556791847679',yasmin:'5567991858129'};
  const persons={claudia:'Cláudia',yasmin:'Yasmin'};
  // Somente mensagem administrativa, sem coletar motivos pessoais ou dados de saúde.
  function whatsapp(person,origin){const p=PHONE[person];if(!p)return null;const name=persons[person];const message=`Olá, ${name}! Vi as informações da SOTOMA na seção ${origin} e gostaria de conhecer disponibilidade, formatos de atendimento e próximos passos.`;return `https://api.whatsapp.com/send/?phone=${p}&text=${encodeURIComponent(message)}`}
  document.querySelectorAll('[data-whatsapp]').forEach(a=>{const who=a.dataset.whatsapp;const origin=a.dataset.origin||'Início';if(PHONE[who]){a.href=whatsapp(who,origin);a.target='_blank';a.rel='noopener noreferrer'}});
  const menu=document.querySelector('[data-menu]'),hamb=document.querySelector('[data-hamb]');
  if(menu&&hamb){hamb.addEventListener('click',()=>{const expanded=hamb.getAttribute('aria-expanded')!=='true';hamb.setAttribute('aria-expanded',String(expanded));menu.classList.toggle('open',expanded)});menu.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>{menu.classList.remove('open');hamb.setAttribute('aria-expanded','false')}));document.addEventListener('keydown',e=>{if(e.key==='Escape'){menu.classList.remove('open');hamb.setAttribute('aria-expanded','false')}})}
  // HERO ALTERNADO V5: fotografias originais, conteúdo e CTA segregados por profissional.
  // Não executa agendamento, não coleta dados sensíveis e não usa serviços externos de terceiros.
  const rotator=document.querySelector('[data-hero-rotator]');
  if(rotator){
    const heroConfig={
      claudia:{name:'Cláudia',eyebrow:'Cláudia · Atendimento a adultos',headline:'Um espaço para <em>ouvir a sua história.</em>',description:'Vida adulta, emoções, mudanças e novos começos merecem atenção. Conheça a Cláudia, seus caminhos de cuidado e conteúdos relacionados.',topics:['Psicoterapia Positiva','V.I.A. · M.I.R.A.','Vida adulta'],profile:'/profissionais/claudia/'},
      yasmin:{name:'Yasmin',eyebrow:'Yasmin · Infância e adolescência',headline:'Cada fase merece <em>escuta e atenção.</em>',description:'Conheça os caminhos de cuidado e os conteúdos sobre infância, adolescência e relações familiares associados à atuação da Yasmin.',topics:['Infância','Adolescência','Psicanálise'],profile:'/profissionais/yasmin/'}
    };
    const title=rotator.querySelector('[data-hero-title]');
    const eyebrow=rotator.querySelector('[data-hero-eyebrow]');
    const description=rotator.querySelector('[data-hero-description]');
    const profile=rotator.querySelector('[data-hero-profile]');
    const contact=rotator.querySelector('[data-hero-contact]');
    const topics=rotator.querySelector('[data-hero-topics]');
    const photoName=rotator.querySelector('[data-hero-picture-name]');
    const announce=rotator.querySelector('[data-hero-announcement]');
    const controls=[...rotator.querySelectorAll('[data-hero-person]')];
    const photos=[...rotator.querySelectorAll('[data-hero-photo]')];
    const pauseButton=rotator.querySelector('[data-hero-pause]');
    const pauseLabel=rotator.querySelector('[data-pause-label]');
    const pauseSymbol=rotator.querySelector('[data-pause-symbol]');
    const motionMedia=window.matchMedia('(prefers-reduced-motion: reduce)');
    let current='claudia',timer=null,userPaused=false,hovered=false,focused=false;
    const delay=7200;
    function clearRotation(){if(timer){window.clearTimeout(timer);timer=null} rotator.classList.remove('is-playing')}
    function canRotate(){return !userPaused&&!hovered&&!focused&&!document.hidden&&!motionMedia.matches}
    function startRotation(){clearRotation();if(!canRotate())return;void rotator.offsetWidth;rotator.classList.add('is-playing');timer=window.setTimeout(()=>{changeSlide(current==='claudia'?'yasmin':'claudia',false);},delay)}
    function changeSlide(person,manual){
      if(!heroConfig[person])return;
      current=person;const data=heroConfig[person];
      rotator.dataset.currentProfessional=person;
      eyebrow.textContent=data.eyebrow;
      title.innerHTML=data.headline; // Somente strings estáticas controladas no código.
      description.textContent=data.description;
      profile.setAttribute('href','#equipe');
      profile.dataset.futureRoute=data.profile;
      profile.firstChild.textContent='Conhecer '+data.name+' ';
      contact.dataset.whatsapp=person;
      contact.dataset.origin='Hero da '+data.name;
      contact.setAttribute('href',whatsapp(person,'Hero da '+data.name));
      contact.firstChild.textContent='Falar com '+data.name+' ';
      photoName.textContent=data.name;
      topics.replaceChildren(...data.topics.map(t=>{const span=document.createElement('span');span.textContent=t;return span}));
      photos.forEach(img=>{const active=img.dataset.heroPhoto===person;img.classList.toggle('is-active',active);img.setAttribute('aria-hidden',String(!active))});
      controls.forEach(btn=>btn.setAttribute('aria-pressed',String(btn.dataset.heroPerson===person)));
      if(manual&&announce)announce.textContent='Apresentando '+data.name+' na capa da SOTOMA';
      startRotation();
    }
    controls.forEach(button=>button.addEventListener('click',()=>changeSlide(button.dataset.heroPerson,true)));
    function reflectPause(){pauseButton.setAttribute('aria-pressed',String(userPaused));pauseButton.setAttribute('aria-label',userPaused?'Reativar alternância automática das profissionais':'Pausar alternância automática das profissionais');pauseLabel.textContent=userPaused?'Reproduzir':'Pausar';pauseSymbol.textContent=userPaused?'▶':'Ⅱ'}
    pauseButton.addEventListener('click',()=>{userPaused=!userPaused;reflectPause();startRotation()});
    rotator.addEventListener('mouseenter',()=>{hovered=true;clearRotation()});
    rotator.addEventListener('mouseleave',()=>{hovered=false;startRotation()});
    rotator.addEventListener('focusin',()=>{focused=true;clearRotation()});
    rotator.addEventListener('focusout',e=>{if(!rotator.contains(e.relatedTarget)){focused=false;startRotation()}});
    document.addEventListener('visibilitychange',startRotation);
    if(motionMedia.addEventListener)motionMedia.addEventListener('change',startRotation);
    reflectPause();startRotation();
  }
  const blogCards=[...document.querySelectorAll('.blog-card')],blogCount=document.querySelector('[data-blog-count]'),filterBtns=[...document.querySelectorAll('[data-filter]')];
  filterBtns.forEach(btn=>btn.addEventListener('click',()=>{const scope=btn.dataset.filter;filterBtns.forEach(x=>x.setAttribute('aria-pressed',String(x===btn)));let count=0;blogCards.forEach(card=>{const visible=scope==='all'||card.dataset.audience===scope;card.hidden=!visible;if(visible)count++});if(blogCount)blogCount.textContent=`${count} artigos exibidos`;const empty=document.querySelector('[data-blog-empty]');if(empty)empty.hidden=count>0}));
  const reduce=window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if(!reduce&&'IntersectionObserver'in window){document.documentElement.classList.add('js');const obs=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target)}})},{threshold:.06,rootMargin:'0px 0px -12px 0px'});document.querySelectorAll('.reveal').forEach(el=>obs.observe(el))}
  const topBtn=document.querySelector('[data-to-top]');if(topBtn){const toggle=()=>topBtn.classList.toggle('visible',window.scrollY>600);window.addEventListener('scroll',toggle,{passive:true});toggle();topBtn.addEventListener('click',()=>window.scrollTo({top:0,behavior:reduce?'auto':'smooth'}))}
  // Links de páginas não incluídas nesta única prévia continuam com os slugs canônicos documentados.
})();
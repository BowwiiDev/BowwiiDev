'use strict';

const nav = document.getElementById('mainNav');
const navLinks = document.querySelectorAll('.navbar-nav a');
navLinks.forEach(link => link.addEventListener('click', () => {
    if (nav.classList.contains('show') && window.bootstrap) {
        bootstrap.Collapse.getOrCreateInstance(nav).hide();
    }
}));

if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            navLinks.forEach(link => {
                const active = link.getAttribute('href') === '#' + entry.target.id;
                link.classList.toggle('active', active);
                if (active) link.setAttribute('aria-current', 'location');
                else link.removeAttribute('aria-current');
            });
        });
    }, { rootMargin: '-15% 0px -65% 0px', threshold: 0 });
    document.querySelectorAll('main > section').forEach(section => observer.observe(section));
}

document.querySelectorAll('[data-filter]').forEach(button => {
    button.addEventListener('click', () => {
        const filter = button.dataset.filter;
        let count = 0;
        document.querySelectorAll('.project-column').forEach(project => {
            project.hidden = filter !== 'all' && project.dataset.category !== filter;
            if (!project.hidden) count++;
        });
        document.querySelectorAll('[data-filter]').forEach(item => {
            const active = item === button;
            item.classList.toggle('active', active);
            item.setAttribute('aria-pressed', String(active));
        });
        document.getElementById('filter-status').textContent = `Showing ${count} projects.`;
    });
});

const projects = JSON.parse(document.getElementById('project-data').textContent);
const modalElement = document.getElementById('projectModal');
let projectTrigger;
document.querySelectorAll('[data-project]').forEach(link => {
    link.addEventListener('click', event => {
        if (!window.bootstrap || event.ctrlKey || event.metaKey || event.shiftKey || event.altKey) return;
        const project = projects.find(item => item.id === link.dataset.project);
        if (!project) return;
        event.preventDefault();
        projectTrigger = link;
        document.getElementById('projectModalTitle').textContent = project.title;
        document.getElementById('modal-category').textContent = `${project.company} / ${project.label}`;
        document.getElementById('modal-overview').textContent = project.overview;
        document.getElementById('modal-outcome').textContent = project.outcome;
        const contributions = document.getElementById('modal-contributions');
        contributions.replaceChildren(...project.contributions.map(text => {
            const li = document.createElement('li'); li.textContent = text; return li;
        }));
        document.getElementById('modal-tags').replaceChildren(...project.tags.map(text => {
            const tag = document.createElement('span'); tag.textContent = text; return tag;
        }));
        bootstrap.Modal.getOrCreateInstance(modalElement).show();
    });
});
let contactAfterModal = false;
document.getElementById('modal-contact').addEventListener('click', event => {
    event.preventDefault();
    contactAfterModal = true;
    bootstrap.Modal.getOrCreateInstance(modalElement).hide();
});
modalElement.addEventListener('hidden.bs.modal', () => {
    if (contactAfterModal) {
        contactAfterModal = false;
        location.hash = 'contact';
        document.querySelector('.email-link').focus({ preventScroll: true });
    } else if (projectTrigger) projectTrigger.focus({ preventScroll: true });
});

const copyButton = document.querySelector('.copy-email');
let copyTimer;
copyButton.addEventListener('click', async () => {
    const status = document.getElementById('copy-status');
    clearTimeout(copyTimer);
    try {
        await navigator.clipboard.writeText(copyButton.dataset.email);
        status.textContent = 'Email copied!';
    } catch {
        // Selecting the visible address is a useful fallback on non-HTTPS hosts.
        const range = document.createRange();
        range.selectNodeContents(document.querySelector('.email-link'));
        const selection = window.getSelection();
        selection.removeAllRanges(); selection.addRange(range);
        status.textContent = 'Select and copy this email address.';
    }
    copyTimer = setTimeout(() => { status.textContent = ''; }, 5000);
});

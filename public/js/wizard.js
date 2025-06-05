let step = 1;
const event = { title: '', date: '', location: '' };
const guests = [];

document.addEventListener('DOMContentLoaded', () => {
    const steps = document.querySelectorAll('.step');

    const showStep = () => {
        steps.forEach(s => s.style.display = s.getAttribute('data-step') == step ? 'block' : 'none');
    };

    document.querySelectorAll('.next').forEach(btn => btn.addEventListener('click', () => {
        if (step === 1) {
            event.title = document.getElementById('title').value;
            event.date = document.getElementById('date').value;
            event.location = document.getElementById('location').value;
        }
        if (step === 2) {
            document.getElementById('summary').innerText = JSON.stringify({ event, guests }, null, 2);
        }
        step++;
        showStep();
    }));

    document.getElementById('addGuest').addEventListener('click', () => {
        const container = document.createElement('div');
        const input = document.createElement('input');
        input.type = 'email';
        input.placeholder = 'Guest Email';
        container.appendChild(input);
        document.getElementById('guests').appendChild(container);
        guests.push({ email: input.value });
        input.addEventListener('input', () => guests[Array.from(document.getElementById('guests').children).indexOf(container)].email = input.value);
    });

    document.getElementById('send').addEventListener('click', async () => {
        const response = await fetch('/send', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content },
            body: JSON.stringify({ event, guests })
        });
        if (response.ok) alert('Invitations sent');
    });

    showStep();
});

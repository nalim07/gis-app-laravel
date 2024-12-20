function togglePassword(inputId, eyeOpenId, eyeClosedId) {
  const input = document.getElementById(inputId);
  const eyeOpen = document.getElementById(eyeOpenId);
  const eyeClosed = document.getElementById(eyeClosedId);

  if (input.type === "password") {
    input.type = "text";
    eyeOpen.classList.remove("hidden");
    eyeClosed.classList.add("hidden");
  } else {
    input.type = "password";
    eyeOpen.classList.add("hidden");
    eyeClosed.classList.remove("hidden");
  }
}

// Form validation Register
const passwordInput = document.getElementById('password');
  const confirmPasswordInput = document.getElementById('password-repeat');
  const passwordError = document.getElementById('password-error');
  const confirmPasswordError = document.getElementById('confirm-password-error');

  passwordInput.addEventListener('input', () => {
    if (passwordInput.value.length < 8) {
      passwordError.classList.remove('hidden');
    } else {
      passwordError.classList.add('hidden');
    }
  });

  confirmPasswordInput.addEventListener('input', () => {
    if (passwordInput.value !== confirmPasswordInput.value) {
      confirmPasswordError.classList.remove('hidden');
    } else {
      confirmPasswordError.classList.add('hidden');
    }
  });

  document.querySelector('form').addEventListener('submit', function(event) {
    if (passwordInput.value.length < 8) {
      passwordError.classList.remove('hidden');
      event.preventDefault(); // Prevent form submission
    }

    if (passwordInput.value !== confirmPasswordInput.value) {
      confirmPasswordError.classList.remove('hidden');
      event.preventDefault(); // Prevent form submission
    }
  });

// Form validation Login
function showError() {
    const errorElement = document.getElementById('login-error');
    errorElement.classList.remove('hidden');
    errorElement.classList.add('flex');
}

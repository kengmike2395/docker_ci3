class StaticData {
	features;
	learningMethods;
	testimonials;

	constructor(features, learningMethods, testimonials) {
		this.features = features;
		this.learningMethods = learningMethods;
		this.testimonials = testimonials;
	}

	getFeaturesDisplay() {
		return this.features.map((val, index) => {
			return `

    <div class="features__item features__item-${index + 1}">
        <h2 class="features__item_heading">${val.heading}</h2>
        <p class="features__item_bullet">${val.bullet1}</p>
        <p class="features__item_bullet">${val.bullet2}</p>
        <p class="features__item_bullet">${val.bullet3}</p>
    </div>
    `;
		});
	}

	getLearningMethodsDisplay() {
		return this.learningMethods.map((val, index) => {
			return `
    <div class="learning-methods__item learning-methods__item-${index + 1}">
        <h2 class="learning-methods__item_heading">${val.heading}</h2>
        <p class="learning-methods__item_description">${val.description}</p>
    </div>
    `;
		});
	}

	getTestimonialsDisplay() {
		return this.testimonials.map((val, index) => {
			return `
    <div class="testimonials__item testimonials__item-${index + 1}">
        <h2 class="testimonials__item_title">${val.title}</h2>
        <p class="testimonials__item_quote">${val.quote}</p>
        <p class="testimonials__item_name">${val.name}</p>
        <p class="testimonials__item_role">${val.role}</p>
        <img class="testimonials__item_image" src="${val.imagePath}" alt="${val.name}">
    </div>
    `;
		});
	}
}

export const features = [
	{
		iconPath: "",
		heading: "Learn through expert-led courses",
		bullet1: "Step-by-step lessons from business experts",
		bullet2: "Covering entrepreneurship, marketing, finance, and more",
		bullet3: "Interactive exercises to apply what you learn",
	},
	{
		iconPath: "",
		heading: "Get 1-on-1 mentorship",
		bullet1: "Connect with experienced mentors",
		bullet2: "Personalized guidance for your business challenges",
		bullet3: "Flexible scheduling based on your availability",
	},
	{
		iconPath: "",
		heading: "Join the community hub",
		bullet1: "Join the Community Hub",
		bullet2: "Share insights, get feedback, and collaborate",
		bullet3: "Access exclusive events and discussions",
	},
];

export const learningMethods = [
	{
		heading: "Watch Engaging Video Lessons",
		description:
			"Learn directly from experienced entrepreneurs through high-quality video content.",
	},
	{
		heading: "Read the Learning Modules",
		description:
			"Dive deeper with structured reading materials and case studies.",
	},
	{
		heading: "Complete Assessments & Apply What You Learn",
		description:
			"Test your knowledge with quizzes, assignments, and hands-on projects.",
	},
];

const testimonials = [
  {
    title: "Transformational",
    quote: "I went from idea to launch in just three months thanks to the courses and mentorship!",
    name: "Lisa M",
    role: "Startup Founder",
    imagePath: "https://randomuser.me/api/portraits/women/44.jpg",
  },
  {
    title: "Intuitive Design",
    quote: "My mentor helped me refine my pitch, and I successfully raised funding for my business.",
    name: "James T",
    role: "Small Business Owner",
    imagePath: "https://randomuser.me/api/portraits/men/46.jpg",
  },
  {
    title: "Mindblowing Service",
    quote: "The video lessons and assignments made learning so practical and easy to follow.",
    name: "Samantha R",
    role: "Marketing Consultant",
    imagePath: "https://randomuser.me/api/portraits/women/65.jpg",
  },
];

export const staticdata = new StaticData(
	features,
	learningMethods,
	testimonials
);

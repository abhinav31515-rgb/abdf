# Hotel Website Frontend — Complete Wireframe (Mobile-First, Responsive, Premium Styling)

This document defines the full frontend wireframe for a multi-brand hotel website inspired by premium hospitality UX patterns (similar to Shangri-La standards), with complete page/view mapping, responsive behavior, and styling/system guidance.

---

## 1) Frontend Experience Principles

## 1.1 Product Goals
- Deliver a premium, trust-building, conversion-oriented hotel website.
- Support multi-brand and multi-property reuse without redesigning each page.
- Ensure non-technical teams can manage content/sections from admin.
- Ensure strong SEO discoverability and performance across devices.

## 1.2 UX Principles
- Mobile-first, then progressively enhanced for tablet/desktop.
- High visual quality with restrained motion and clear hierarchy.
- Fast path to booking from every major page.
- Clear navigation and wayfinding (property, rooms, offers, dining, contact).
- Localized experiences (language, currency, local content).

---

## 2) Global Frontend Shell (All Pages)

## 2.1 Header (Responsive)
- **Top Utility Bar**
  - Contact number
  - Sign in / Join
  - Language / Currency switcher
  - My Bookings
- **Primary Navigation Bar**
  - Brand logo + property selector
  - Main nav links
  - Persistent `Book Now` CTA
- **Desktop Behavior**
  - Mega menu with preview cards (rooms, offers, dining)
- **Mobile Behavior**
  - Hamburger drawer
  - Sticky compact header on scroll
  - Quick-book button always visible

## 2.2 Footer (Responsive)
- Brand and contact details
- Quick links by section
- Newsletter signup
- Social links
- Legal links (privacy/terms/cookies)
- Awards/trust badges (optional)

## 2.3 Global Components
- Breadcrumbs
- Page hero banner
- Section headers with eyebrow + title + subtitle
- Cards (room, offer, dining, experience, review)
- CTA blocks
- Inquiry/contact forms
- Trust strips (ratings, awards, location highlights)

---

## 3) Styling System Wireframe

## 3.1 Visual Language
- Luxury minimalism:
  - Clean spacing
  - Elegant typography scale
  - Gold/neutral accent balance
  - High-quality photography-led sections

## 3.2 Tokens
- Color tokens:
  - Primary, secondary, accent, neutral, surface, success/error
- Typography tokens:
  - Hero, H1-H6, body, small, caption
- Spacing tokens:
  - xxs/xs/sm/md/lg/xl/2xl
- Radius/shadow tokens:
  - cards, modals, buttons

## 3.3 Component States
- Buttons: default/hover/focus/disabled/loading
- Inputs: default/focus/error/success
- Cards: static/hover/selected
- Nav items: active/expanded

---

## 4) Responsive Wireframe Rules

## 4.1 Breakpoints
- Mobile: 320–767
- Tablet: 768–1023
- Desktop: 1024–1439
- Wide desktop: 1440+

## 4.2 Layout Behavior
- Mobile:
  - Single-column sections
  - Collapsed filters and accordions
  - Sticky bottom booking CTA for booking-heavy pages
- Tablet:
  - 2-column cards and mixed section layouts
- Desktop:
  - 2/3-column editorial and gallery compositions

## 4.3 Responsive Constraints
- Minimum touch target: 44x44
- Responsive images with `srcset`
- Avoid layout shift with fixed media aspect boxes
- Motion reduced when user prefers reduced motion

---

## 5) Complete Page Map (All Views)

## 5.1 Core Public Pages
1. Home
2. Rooms & Suites Listing
3. Room Detail
4. Dining Listing
5. Restaurant Detail
6. Offers Listing
7. Offer Detail
8. Wellness / Spa
9. Meetings & Events
10. Weddings
11. Gallery
12. Experiences / Destination Guide
13. About / Brand Story
14. Contact / Map / Directions
15. FAQ
16. Sustainability / CSR
17. Press / Media
18. Careers
19. Legal pages (Terms/Privacy/Cookies)

## 5.2 Booking Funnel Pages
20. Availability Search
21. Room & Rate Selection
22. Add-ons / Enhancements
23. Guest Details
24. Payment
25. Confirmation
26. Manage Booking

## 5.3 Account / Membership Pages
27. Sign In
28. Sign Up / Join
29. Forgot Password
30. Profile Dashboard
31. Loyalty / Member Benefits

## 5.4 Utility / System Pages
32. 404
33. 500
34. Maintenance
35. Search Results
36. Sitemap (human-readable)

---

## 6) Page-by-Page Wireframe Blocks

## 6.1 Home
- Hero (image/video, headline, booking shortcut)
- Featured rooms carousel/cards
- Featured offers
- Dining highlights
- Wellness teaser
- Reviews strip
- Gallery teaser
- Location/map teaser
- Final conversion CTA

## 6.2 Rooms Listing
- Intro hero + short filters summary
- Filters panel:
  - occupancy
  - bed type
  - view type
  - amenities
  - price band
- Room cards grid/list toggle
- CTA to compare/book

## 6.3 Room Detail
- Media gallery
- Room summary + pricing indication
- Amenities tabs
- Policies section
- Similar rooms recommendations
- Sticky booking panel

## 6.4 Dining Listing + Detail
- Dining categories
- Restaurant cards
- Detail page:
  - concept story
  - menu highlights
  - opening hours
  - reservation CTA

## 6.5 Offers Listing + Detail
- Offer category filters
- Offer cards with validity dates
- Offer detail:
  - inclusions/exclusions
  - terms and conditions
  - direct booking CTA

## 6.6 Wellness / Spa
- Signature therapies
- Wellness packages
- Therapist/team highlights
- Appointment CTA

## 6.7 Meetings / Weddings
- Venue cards + capacities
- Floor plan/media
- Download brochure CTA
- Inquiry form

## 6.8 Gallery
- Filter tabs (rooms, dining, wellness, events)
- Masonry/grid display
- Lightbox with captions

## 6.9 Contact
- Contact cards
- Map embed
- Travel guidance
- Inquiry form with department routing

## 6.10 Booking Funnel
- Step progress indicator
- Transparent pricing summary
- Edit stay details controls
- Upsell modules
- Payment trust badges

---

## 7) SEO-Oriented Frontend Views

## 7.1 SEO Surfaces per Page
- Metadata-ready heading hierarchy
- SEO title/description injection zones
- Canonical/hreflang hooks
- Schema blocks placement

## 7.2 Structured Data Targets
- Hotel/LodgingBusiness on property pages
- Offer schema on offers
- FAQ schema on FAQ + select detail pages
- Breadcrumb schema on all nested pages
- Review/AggregateRating where policy-compliant

## 7.3 Internal Linking Design
- Related sections on each detail page
- “You may also like” blocks
- Local attractions linking cluster

---

## 8) Reviews & Social Proof Frontend Views

- Review highlights strip on home
- Full reviews page (optional)
- Curated review snippets on room/offer/dining pages
- Trust badges and awards band
- Source label display (Google/OTA/Internal)

---

## 9) Accessibility Wireframe Requirements

- Semantic landmarks (`header`, `nav`, `main`, `footer`)
- Keyboard navigable menus and modals
- Proper focus states and skip links
- Contrast-compliant text/background pairs
- Form labels/error messages accessible by screen readers

---

## 10) Performance & Google-Friendliness Frontend Rules

- Above-the-fold critical rendering optimized
- Responsive image loading + lazy loading
- Minimized JS payload and deferred non-critical scripts
- Font loading strategy (`preload`, fallback)
- CLS-safe media placeholders
- Caching strategy alignment with CDN

---

## 11) Content Management Mapping (Frontend ↔ Admin)

Each frontend page should map to admin-editable modules:
- Page metadata (title, slug, status, locale)
- Section composition (enable/disable/reorder)
- Content blocks (text, media, CTA, lists)
- SEO settings
- Media references
- Review display rules

---

## 12) Mobile-First Wireframe (Detailed)

## 12.1 Mobile Home
- Compact hero with direct booking CTA
- Swipeable cards for rooms/offers
- Accordion info sections
- Sticky bottom CTA (`Book Now`)

## 12.2 Mobile Listing Pages
- Top filter chips + slide-over filter panel
- Infinite scroll / paginated cards
- Quick action buttons (view, compare, book)

## 12.3 Mobile Detail Pages
- Swipe gallery
- Sticky summary bar (price + CTA)
- Collapsible details for readability

---

## 13) Frontend Component Inventory

- Header variants (transparent, sticky, solid)
- Hero variants (image, video, editorial)
- Card variants (room, offer, dining, review, event)
- Gallery variants (grid, masonry, carousel)
- CTA variants (inline, full-width block, sticky)
- Form variants (contact, inquiry, booking)
- List variants (features, amenities, policies)

---

## 14) Frontend Wireframe Build Order

1. Global shell (header/footer/nav)
2. Home page sections
3. Rooms listing + detail
4. Offers + dining pages
5. Gallery + contact + utility pages
6. Booking funnel
7. SEO + schema + analytics hooks
8. Accessibility + performance hardening
9. Localization and multi-property variations

---

## 15) Frontend Wireframe Acceptance Criteria

- All core pages and booking funnel pages have defined wireframes.
- Every page is mobile-first and responsive by design.
- Premium styling system is defined via reusable tokens/components.
- Admin-manageable content boundaries are explicit.
- SEO and performance requirements are integrated into wireframe decisions.
- Frontend supports reviews display, trust signals, and clear conversion paths.

@extends('layouts.app')
@section('title', 'Admin Dashboard')

@section('content')
<style>
    .admin-dashboard {
        min-height: 100vh;
        background: #f1f5f9;
        padding: 2rem;
    }

    .dashboard-header {
        background: white;
        padding: 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: white;
        padding: 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .stat-card:hover {
        transform: translateY(-2px);
    }

    .stat-number {
        font-size: 2rem;
        font-weight: bold;
        color: #0f172a;
        margin: 0.5rem 0;
    }

    .stat-label {
        color: #64748b;
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .recent-items {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }

    .section-card {
        background: white;
        padding: 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .section-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #0f172a;
        margin-bottom: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .item-list {
        list-style: none;
        padding: 0;
    }

    .item-list li {
        padding: 0.75rem 0;
        border-bottom: 1px solid #e2e8f0;
    }

    .item-list li:last-child {
        border-bottom: none;
    }

    .view-all-btn {
        font-size: 0.875rem;
        color: #3b82f6;
        text-decoration: none;
        transition: color 0.2s;
    }

    .view-all-btn:hover {
        color: #2563eb;
    }

    .add-new-btn {
        display: inline-flex;
        align-items: center;
        background: #3b82f6;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        font-weight: 500;
        transition: background-color 0.2s;
        text-decoration: none;
    }

    .add-new-btn:hover {
        background: #2563eb;
        color: white;
    }

    .welcome-message {
        font-size: 1.5rem;
        color: #0f172a;
        margin-bottom: 0.5rem;
    }

    .last-login {
        color: #64748b;
        font-size: 0.875rem;
    }

    .stat-icon {
        width: 2.5rem;
        height: 2.5rem;
        background: #e0f2fe;
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }

    .stat-icon svg {
        width: 1.5rem;
        height: 1.5rem;
        color: #0284c7;
    }

    .user-quick-actions {
        display: flex;
        gap: 1rem;
        margin-top: 1rem;
    }

    .quick-action-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        font-weight: 500;
        color: #475569;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        transition: all 0.2s;
        text-decoration: none;
    }

    .quick-action-btn:hover {
        background: #f1f5f9;
        color: #0f172a;
        border-color: #cbd5e1;
    }

    .status-badge {
        display: inline-block;
        padding: 0.25rem 0.5rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    .status-active {
        background: #dcfce7;
        color: #166534;
    }

    .status-draft {
        background: #fee2e2;
        color: #991b1b;
    }
</style>

<div class="admin-dashboard">
    <div class="dashboard-header">
        <h1 class="welcome-message">Welcome back, {{ Auth::user()->name }}!</h1>
        <p class="last-login">Last login: {{ Auth::user()->updated_at->diffForHumans() }}</p>
        
        <div class="user-quick-actions">
            <a href="{{ route('skills.create') }}" class="quick-action-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add New Skill
            </a>
            <a href="#" class="quick-action-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                Add New Project
            </a>
        </div>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
            </div>
            <div class="stat-number">{{ $totalSkills ?? 0 }}</div>
            <div class="stat-label">Skills</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <div class="stat-number">{{ $totalProjects ?? 0 }}</div>
            <div class="stat-label">Projects</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
            </div>
            <div class="stat-number">{{ $totalEducation ?? 0 }}</div>
            <div class="stat-label">Education</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
            </div>
            <div class="stat-number">{{ $totalAchievements ?? 0 }}</div>
            <div class="stat-label">Achievements</div>
        </div>
    </div>

    <div class="recent-items">
        <div class="section-card">
            <div class="section-title">
                <span>Recent Skills</span>
                <a href="{{ route('skills.create') }}" class="add-new-btn">Add New</a>
            </div>
            <ul class="item-list">
                @forelse($skills as $skill)
                    <li>
                        <div class="flex justify-between items-center">
                            <span>{{ $skill->name }}</span>
                            <span class="status-badge {{ $skill->level == 'expert' ? 'status-active' : 'status-draft' }}">
                                {{ ucfirst($skill->level) }}
                            </span>
                        </div>
                    </li>
                @empty
                    <li class="text-gray-500">No skills added yet</li>
                @endforelse
            </ul>
        </div>

        <div class="section-card">
            <div class="section-title">
                <span>Recent Projects</span>
                <a href="#" class="add-new-btn">Add New</a>
            </div>
            <ul class="item-list">
                @forelse($projects as $project)
                    <li>{{ $project->title ?? $project->name ?? 'Untitled Project' }}</li>
                @empty
                    <li class="text-gray-500">No projects added yet</li>
                @endforelse
            </ul>
        </div>

        <div class="section-card">
            <div class="section-title">
                <span>Recent Education</span>
                <a href="#" class="add-new-btn">Add New</a>
            </div>
            <ul class="item-list">
                @forelse($education as $edu)
                    <li>{{ $edu->institution }}</li>
                @empty
                    <li class="text-gray-500">No education records added yet</li>
                @endforelse
            </ul>
        </div>

        <div class="section-card">
            <div class="section-title">
                <span>Recent Achievements</span>
                <a href="#" class="add-new-btn">Add New</a>
            </div>
            <ul class="item-list">
                @forelse($achievements as $achievement)
                    <li>{{ $achievement->title }}</li>
                @empty
                    <li class="text-gray-500">No achievements added yet</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection